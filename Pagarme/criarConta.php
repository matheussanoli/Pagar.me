<?php 
require("pagarme-php-master/Pagarme.php");

    Pagarme::setApiKey("ak_test_Rw4JR98FmYST2ngEHtMvVf5QJW7Eoo");
$account = new Pagarme_Bank_Account(array(
        "bank_code" => "341",
        "agencia" => "0932",
        "agencia_dv" => "5",
        "conta" => "58054",
        "conta_dv" => "1",
        "document_number" => "26268738888",
        "legal_name" => "API BANK ACCOUNT"
    ));
    $account->create();
    print_r($account);
    ?>