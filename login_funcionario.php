<?php 
require_once "config.php"; echo "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login de Funcionários</title>
</head>
<body> 
    <div class="row">
        <div class="col s12 m6 push-m3">
        <h3 class="light">Login Funcionários</h3>
            <form action="" method="post">
                <div class="input-field col s12">
                    <label for="usuario">Usuário: </label><br>
                    <input type="text" name="txtusuario" id="usuario"><br><br>
                </div>
                
                <div class="input-field col s12">
                    <label for="senha">Senha: </label><br>
                    <input type="password" name="txtsenha" id="senha"><br><br>
                </div>
                <button type="submit" class="btn black" name="btnconfirmar">Confirmar </button> 
                <button type="reset" class="btn black" name="btncancelar">Cancelar </button><br>
            </form>
        </div>
    </div>
    
</body>
</html>

<?php
session_start();

if (isset($_POST['txtusuario'], $_POST['txtsenha'])) {
    $usuario = $_POST['txtusuario'];
    $senha = $_POST['txtsenha'];

    $consulta = $conexao->prepare("SELECT funUsuario, funSenha FROM tabfuncionarios WHERE funUsuario = ?");
    $consulta->execute([$usuario]);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    if ($resultado && $senha == $resultado['funSenha']) {
        $_SESSION['usuario'] = $resultado['funUsuario'];
        header('location: home.php');
    } else {
        if ($consulta->rowCount() == 0) {
            echo "<b>Usuário não encontrado</b>";
        } else {
            if (isset($_SESSION['tentativa'])) {
                $_SESSION['tentativa']++;
            } else {
                $_SESSION['tentativa'] = 1;
            }

            echo "<br><b>Senha incorreta: {$_SESSION['tentativa']} de 3</b>";

            if ($_SESSION['tentativa'] >= 3) {
                header('location: erro.php');
            }
        }
    }
    $conexao = null; // Fechar a conexão após o uso
    }
?>