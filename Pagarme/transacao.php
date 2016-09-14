<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 

$CARD_HASH = $_POST["card_hash"];

    require("pagarme-php/Pagarme.php");

    Pagarme::setApiKey("ak_test_grXijQ4GicOa2BLGZrDRTR5qNQxJW0");

    $transaction = new PagarMe_Transaction(array(
        'amount' => 1000,
        'card_hash' => "{CARD_HASH}"
    ));

    $transaction->charge();

    $status = $transaction->status; // status da transação

 ?>