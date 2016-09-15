 <?php
    require("pagarme-php-master/Pagarme.php");

    Pagarme::setApiKey("ak_test_Rw4JR98FmYST2ngEHtMvVf5QJW7Eoo");

    $transaction = PagarMe_Payable::all(1,10);

//print_r($transaction);    
?>
<div class="container">
<div class="jumbotron">
<h3>Lista de Payable</h3>


<table class="table table-striped">
	<th>Codigo Payable</th>
	<th>Codigo Transacao</th>
	<?php
	for ($i=0; $i <4 ; $i++) { 
	$a= $transaction[$i]["id"];
	$b= $transaction[$i]["transaction_id"];


?>
	<tr>
		<td><?php echo $a ?></td>
		<td><?php echo $b ?></td>
	</tr>
	<?php } ?>
</table>	
</div>
</div>