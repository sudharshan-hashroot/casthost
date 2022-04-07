<?php

if(isset($_POST['name'])) {
    // echo "string"; exit;

    $response = $_POST["g-recaptcha-response"];
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6Lc26NEaAAAAAEJIVmrldd4v0EuAvE3axwHaWo9V',
        'response' => $_POST["g-recaptcha-response"]
    );
    $options = array(
        'http' => array (
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success=json_decode($verify);

    if ($captcha_success->success==false) {
        echo "<p>You are a bot! Go away!</p>";
    } else if ($captcha_success->success==true) {
        

        // WHMCS API Connection Details
        require_once 'whmcs/whmcs.php';

        $name           = $_POST['name'];
        $email          = $_POST['email'];
        $subject        = $_POST['subject'];
        $phone          = 'Phone: '.$_POST['phone'];
        $message        = 'Message: '.$_POST['message'];
        $full_message   = nl2br($phone.'&nbsp; | &nbsp;'.$message);

        
        // Call the API
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(
                array(
                    'action' => 'OpenTicket',
                    'deptid' => '1',
                    'username' => $identifier,
                    'password' => $secret,
                    'subject' => $subject,
                    'message' => $full_message,
                    'name' => $name,
                    'email' => $email,
                    'customfields' => '',
                    'priority' => 'Medium',
                    'markdown' => true,
                    'attachments' => '',
                    'responsetype' => 'json',
                )
            )
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        if (curl_error($ch)) {
            die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
        }
        curl_close($ch);

        // echo "<pre>";
        // print_r($response);
        // echo "</pre>";

        // Decode response
        $jsonData = json_decode($response, true);

        // Dump array structure for inspection
        // var_dump($jsonData);
        // exit;
        
        if ($jsonData['result'] === 'success') {
            echo '{ "alert": "alert-success", "message": "Your message has been sent successfully!" }';
        }
    }
}
?>