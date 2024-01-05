<?php
    include_once 'config.php';
   include_once "cabecalho.html";

   echo "<h1>Consulta Clientes</h1>";

   $campos_form = filter_input_array(INPUT_GET, FILTER_DEFAULT);

?>

<form action="" method="get">
      Pesquisar por:
      <input type="text" name="txtPesquisar" id="pesquisar" value="<?php if (isset($campos_form['txtPesquisar'])){
        echo $campos_form['txtPesquisar'];
      } ?>" placeholder="Digite o valor">
      <br><br>
      <input type="submit" name="btnEnviar" id="pesquisaCliente">
</form>

<?php
  if(!empty($campos_form['btnPesquisar'])) {

    $dado = "%" . $campos_form['txtPesquisar'] . "%";

    $sql = "SELECT * FROM tabclientes WHERE clinome LIKE :valor ORDER BY clinome";
    $consulta = $conexao->prepare($sql);
    $consulta->bindParam(':valor', $dado);
    $consulta->execute();

    while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
        extract($registro);
        echo "ID: $cliId <br>";
        echo "Nome: $cliNome <br>";
        echo "Telefone: $cliTelefone <br>";
        echo "<hr>";
    }
  }
?>