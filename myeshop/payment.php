<?php
$amount=$_POST["amount"];
require_once("lib/Twocheckout.php");
Twocheckout::username('hassanjameel2019');
Twocheckout::password('Abcdef@1234567');
Twocheckout::verifySSL(false);
Twocheckout::privateKey('9E1FAA8B-0C9C-4900-A665-CB43E7D47B5D'); //Private Key
Twocheckout::sellerId('901404273'); // 2Checkout Account Number
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