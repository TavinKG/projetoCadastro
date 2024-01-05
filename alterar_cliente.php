<?php 
    require_once  "config.php";
    include_once "cabecalho.html";

    $codigo = $_GET['id'];
    $consulta = $conexao->prepare('SELECT * FROM tabclientes WHERE cliId = :code');
    $consulta->bindValue(':code', $codigo);
    $consulta->execute();

    $linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Alterando clientes</h3>
        <?php echo "Cliente: {$linha['cliId']}"; ?>
        <form action="alterar_cliente_action.php" method="post">
            <!--código do cliente-->
            <input type="hidden" name="txtid" value="<?php echo "{$linha['cliId']}"; ?>">
            <!--nome do cliente-->
            <div class="input-field col s12">
                <label for="nome">Nome: </label><br>
                <input type="text" name="txtnome" id="nome" value="<?php echo "{$linha['cliNome']}"; ?>">
            </div>
            <!--telefone do cliente-->
            <div class=" input-field col s12">
                <label for="fone">Telefone: </label><br>
                <input type="text" name="txtfone" id="fone" value="<?php echo "{$linha['cliTelefone']}"; ?>">
            </div>
            <!--data de nascimento do cliente-->
            <div class=" input-field col s12">
                <label for="data">Data Nascimento: </label><br>
                <input type="date" name="txtdatanasc" id="data" value="<?php echo "{$linha['cliDataNasc']}"; ?>">
            </div>
            <!--botões de controle -->
            <button type=" submit" class="btn" name="btnalterar">Alterar </button>
            <a href="listar.php" class="btn green">Listar clientes</a>
        </form>
    </div>
</body>
</html>

