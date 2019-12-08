<?php
$amount=$_POST["amount"];
require_once("lib/Twocheckout.php");
Twocheckout::username('wk1997');
Twocheckout::password('Waqaralikhan1997');
Twocheckout::verifySSL(false);
Twocheckout::privateKey('87F57D17-C592-4E45-A70A-640A3B2E98AE'); //Private Key
Twocheckout::sellerId('901404483'); // 2Checkout Account Number
Twocheckout::sandbox(true); // Set to false for production accounts.

try {
    $charge = Twocheckout_Charge::auth(array(
        "merchantOrderId" => "123",
        "token"      => $_POST['token'],
        "currency"   => 'Rs',
        "total"      => $amount,
        "billingAddr" => array(
            "name" => 'Farhan',
            "addrLine1" => '123 Test St',
            "city" => 'Karachi',
            "state" => 'OH',
            "zipCode" => '43123',
            "country" => 'Pakistan',
            "email" => 'example@2co.com',
            "phoneNumber" => '555-555-5555'
        )
    ));

    if ($charge['response']['responseCode'] == 'APPROVED') {
        echo "Thanks for your Order!";
        //echo "<h3>Return Parameters:</h3>";
        //echo "<pre>";
        //print_r($charge);
        //echo "</pre>";

    }
} catch (Twocheckout_Error $e) {
    print_r($e->getMessage());
}