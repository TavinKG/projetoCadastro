<?php
try {
    $conexao = new PDO('mysql:host=localhost;dbname=bancodados', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado ao banco de dados com sucesso <br>";
} catch (PDOException $e) {
   echo 'Erro na conexão com o banco de dados: '.$e->getMessage();
}
?>
