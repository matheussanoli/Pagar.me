<?php 
require("pagarme-php-master/Pagarme.php");

    Pagarme::setApiKey("ak_test_Rw4JR98FmYST2ngEHtMvVf5QJW7Eoo");
$bankid = $_GET["bankid"];
for ($i=0; $i <=2 ; $i++) { 
    

$recipient = new PagarMe_Recipient(array(
        "transfer_interval" => "weekly",
        "transfer_day" => 5,
        "transfer_enabled" => true,
        "automatic_anticipation_enabled" => true,
        "anticipatable_volume_percentage" => 85,
        "bank_account_id" => $bankid
    ));
    $recipient->create();
    $recipient["id"];
    print_r($recipient);
}    
    ?>
<div class="container">
    <div class="jumbotron">
         <?php echo "<h3>Recebedor cadastrado com Sucesso<h3>";  ?>
         <?php echo " <a href='transacao.php?id=".$recipient["id"]."' class='btn btn-success'>Criar Transacao</a>" ?>
    </div>
</div>