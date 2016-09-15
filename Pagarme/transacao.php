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


require("pagarme-php-master/Pagarme.php");

    Pagarme::setApiKey("ak_test_Rw4JR98FmYST2ngEHtMvVf5QJW7Eoo");

    $transaction = new PagarMe_Transaction(array(
        'amount' => 1000,
        'card_hash' => $CARD_HASH,
        'split_rules' => array(
        array(
            'recipient_id' => 're_cit4f66gh003o0n6dt7smqkph',
            'charge_processing_fee' => true,
            'liable' => true,
            'percentage' => '60',

        ),

        array(
            'recipient_id' => 're_cit3uhjsq01kb3j6e1f9y3mrg',
            'charge_processing_fee' => true,
            'liable' => false,
            'percentage' => '40',
        )
        )
    ));

    $transaction->charge();

    $status = $transaction->status; // status da transação
     ?>
     <div class="container">
         <div class="jumbotron">
             <h3>Transacao realizada com sucesso n°<?php echo $transaction["id"];  ?></h3>
<a class="btn btn-success" href="listarpayables.php">Listar Payables</a>
         </div>

     </div>