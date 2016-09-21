    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="container">
    <div class="jumbotron">
    <h2>Digite os Dados Pessoais</h2>
        <form class="form-group" action="criarConta.php" method="post">
        <input type="text" class="form-control" name="bank_code" placeholder="Insira o Codigo do Banco" required=""><br>
        <input type="text" class="form-control" name="agencia" placeholder="Insira o Numero da Agencia" required=""><br>
        <input type="text" class="form-control" name="agencia_dv" placeholder="Insira o digito verificador da Agencia" required=""><br>
        <input type="text" class="form-control" name="conta" placeholder="Insira o Numero da Conta" required=""><br>
        <input type="text" class="form-control" name="conta_dv" placeholder="Insira o digito verificador da Conta" required=""><br>
        <input type="text" class="form-control" name="document_number" placeholder="Insira o Numero do documento" required=""><br>
        <input type="text" class="form-control" name="legal_name" placeholder="Insira o Nome do Cliente" required=""><br>
        <input type="submit" class="btn btn-primary" name="">
        
    </form>
    </body>
    </html>
    <?php 
    require("pagarme-php-master/Pagarme.php");

    if ($_POST) {
        $bank_code = $_POST["bank_code"];
$agencia = $_POST["agencia"];
$agencia_dv = $_POST["agencia_dv"];
$conta = $_POST["conta"];
$conta_dv = $_POST["conta_dv"];
$document_number = $_POST["document_number"];
$legal_name = $_POST["legal_name"];
        Pagarme::setApiKey("ak_test_Rw4JR98FmYST2ngEHtMvVf5QJW7Eoo");
            $account = new Pagarme_Bank_Account(array(
            "bank_code" => $bank_code,
            "agencia" => $agencia,
            "agencia_dv" => $agencia_dv,
            "conta" => $conta,
            "conta_dv" => $conta_dv,
            "document_number" => $document_number,
            "legal_name" => $legal_name
        ));
        $account->create();
        $bankid = $account["id"];
        echo "<h3>Conta cadastrada com sucesso<h3>";
        echo "<a href='criarRecebedor.php?bankid=$bankid' class='btn btn-success'>Cadastrar Recebedor</a>";
    }
        ?>