<?php
include_once "cabecalho.html";
require_once "config.php";

$id = $_GET['id'];
//$id = 2;
$consulta = $conexao->prepare('SELECT * FROM tabclientes WHERE cliId = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();

$linha = $consulta->fetch(PDO::FETCH_ASSOC);

$codigo = $id;
$nome = $linha['cliNome'];
$fone = $linha['cliTelefone'];
$data = $linha['cliDataNasc'];


 //  echo "{$linha['cli_nome']}";
echo "<div class='row'>";
echo "<div class='col s12 m6 push-m3'>";
 echo "<h2>Excluir cliente?</h2>";
echo "<b>Código     = </b>$codigo<br>
      <b>Nome       = </b>$nome<br>
      <b>Telefone   = </b>$fone <br>
      <b>Data Nasc. = </b>$data<br>";
echo "<a href='lista.php' class='btn'>Listagem de clientes</a>";
echo "<a href='exclui_action.php?id=$codigo' class='btn red'>Sim, excluir registro.</a>";
echo "</div></div></div>";
include_once "rodape.php";
?>
