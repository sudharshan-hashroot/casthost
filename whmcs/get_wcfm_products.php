<?php

include 'whmcs.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    http_build_query(
        array(
            'action' => 'GetProducts',
            'identifier' => $identifier,
            'secret' => $secret,
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
// echo "res: ".$jsonData["result"]; exit;

if ($jsonData["result"] == "success") {
    $data['response'] = $jsonData['products']['product'];
    $fp = fopen('products.json', 'w');
    fwrite($fp, json_encode($jsonData['products']));
    fclose($fp);
    echo "Product JSON added successfully";
} elseif ($jsonData["result"] == "error") {
	echo "Something went wrong! Please contact our support team.";
}


?>