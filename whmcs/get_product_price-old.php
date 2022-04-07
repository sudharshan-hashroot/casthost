<?php
try {
    $product_data = "products-old.json";
    $jsondata = file_get_contents($product_data);
    $priceList = json_decode($jsondata);
    // echo "<pre>"; print_r($priceList->product); echo "</pre>";

    foreach ($priceList->product as $dkey => $products) {
        // echo "dkey: ".$domains$dkey;
        $products = json_decode(json_encode($products), true);
        $product_id = $products['pid'];
        if ($product_id == 5) {
            echo "PID = 5 (stream_packages - STARTER PLAN)<br>";
            $configoptions = json_decode(json_encode($products['configoptions']), true);
            // echo "<pre>"; print_r($configoptions); echo "</pre>";
            echo "stream_packages.php, pricing.php - Monthly - STARTER PLAN: ";
            echo $price = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['monthly'];
            echo "<br>";
            echo "stream_packages.php, pricing.php - Quarterly - STARTER PLAN: ";
            echo $price = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "stream_packages.php, pricing.php - Semiannually - STARTER PLAN: ";
            echo $price = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "stream_packages.php, pricing.php - Yearly - STARTER PLAN: ";
            echo $price = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 40) {
            echo "PID = 40 (stream_packages - UNLIMITED PLAN)<br>";
            $configoptions = json_decode(json_encode($products['configoptions']), true);
            echo "stream_packages.php, pricing.php - Monthly - UNLIMITED PLAN: ";
            echo $price = $configoptions['configoption'][2]['options']['option'][0]['pricing']['USD']['monthly'];
            echo "<br>";
            echo "stream_packages.php, pricing.php - Quarterly - UNLIMITED PLAN: ";
            echo $price = $configoptions['configoption'][2]['options']['option'][0]['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "stream_packages.php, pricing.php - Semiannually - UNLIMITED PLAN: ";
            echo $price = $configoptions['configoption'][2]['options']['option'][0]['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "stream_packages.php, pricing.php - Yearly - UNLIMITED PLAN: ";
            echo $price = $configoptions['configoption'][2]['options']['option'][0]['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 83) {
            echo "PID = 83 (streamurl)<br>";
            $pricing = json_decode(json_encode($products), true);
            echo "streamurl.php - STARTER PLAN: ";
            echo $price = $pricing['pricing']['USD']['monthly'];
            echo "<br>";
            echo "streamurl.php - MEDIUM PLAN: ";
            echo $price = $pricing['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "streamurl.php - LARGE PLAN: ";
            echo $price = $pricing['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "streamurl.php - UNLIMITED PLAN: ";
            echo $price = $pricing['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 10) {
            echo "PID = 10 (cpanel_hosting - STARTER PLAN)<br>";
            $pricing = json_decode(json_encode($products), true);
            echo "cpanel_hosting.php - Monthly - STARTER PLAN: ";
            echo $price = $pricing['pricing']['USD']['monthly'];
            echo "<br>";
            echo "cpanel_hosting.php - Quarterly - STARTER PLAN: ";
            echo $price = $pricing['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "cpanel_hosting.php - Semiannually - STARTER PLAN: ";
            echo $price = $pricing['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "cpanel_hosting.php - Yearly - STARTER PLAN: ";
            echo $price = $pricing['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 13) {
            echo "PID = 13 (cpanel_hosting - MEDIUM PLAN)<br>";
            $pricing = json_decode(json_encode($products), true);
            echo "cpanel_hosting.php - Monthly - MEDIUM PLAN: ";
            echo $price = $pricing['pricing']['USD']['monthly'];
            echo "<br>";
            echo "cpanel_hosting.php - Quarterly - MEDIUM PLAN: ";
            echo $price = $pricing['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "cpanel_hosting.php - Semiannually - MEDIUM PLAN: ";
            echo $price = $pricing['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "cpanel_hosting.php - Yearly - MEDIUM PLAN: ";
            echo $price = $pricing['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 24) {
            echo "PID = 24 (cpanel_hosting - LARGE PLAN)<br>";
            $pricing = json_decode(json_encode($products), true);
            echo "cpanel_hosting.php - Monthly - LARGE PLAN: ";
            echo $price = $pricing['pricing']['USD']['monthly'];
            echo "<br>";
            echo "cpanel_hosting.php - Quarterly - LARGE PLAN: ";
            echo $price = $pricing['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "cpanel_hosting.php - Semiannually - LARGE PLAN: ";
            echo $price = $pricing['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "cpanel_hosting.php - Yearly - LARGE PLAN: ";
            echo $price = $pricing['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 30) {
            echo "PID = 30 (cpanel_hosting - UNLIMITED PLAN)<br>";
            $pricing = json_decode(json_encode($products), true);
            echo "cpanel_hosting.php - Monthly - UNLIMITED PLAN: ";
            echo $price = $pricing['pricing']['USD']['monthly'];
            echo "<br>";
            echo "cpanel_hosting.php - Quarterly - UNLIMITED PLAN: ";
            echo $price = $pricing['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "cpanel_hosting.php - Semiannually - UNLIMITED PLAN: ";
            echo $price = $pricing['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "cpanel_hosting.php - Yearly - UNLIMITED PLAN: ";
            echo $price = $pricing['pricing']['USD']['annually'];
            echo "<br><br>";
        }
        if ($product_id == 78) {
            echo "PID = 78 (seoservices)<br>";
            $pricing = json_decode(json_encode($products), true);
            echo "seoservices.php - MONTHLY PLAN: ";
            echo $price = $pricing['pricing']['USD']['monthly'];
            echo "<br>";
            echo "seoservices.php - QUARTERLY PLAN: ";
            echo $price = $pricing['pricing']['USD']['quarterly'];
            echo "<br>";
            echo "seoservices.php - SEMI ANNUALLY PLAN: ";
            echo $price = $pricing['pricing']['USD']['semiannually'];
            echo "<br>";
            echo "seoservices.php - YEARLY: ";
            echo $price = $pricing['pricing']['USD']['annually'];
            echo "<br>";
        }
    }
} catch (Exception $e) {
    echo "error";
}
?>