<?php
 require_once 'config.php'; // inclui a conexao do banco de dados
 include_once "cabecalho.html"; //inclui o materialize


$consulta = $conexao->prepare('Select * from tabfuncionarios');
$consulta->execute();
?>
<title>Lista de clientes</title>
</head>


<body>
   <h2>Listagem de funcionários</h2>
   <table>
      <tr>
         <th>Código</th>
         <th>Nome</th>
         <th>Senha</th>
         <th>Email</th>
         <th>Cargo</th>
         <th>Usuário</th>
         <th>Foto</th>
         <th colspan="2">Ações</th>
      </tr>
      <?php
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
         echo "<tr><td>{$linha['funId']}</td>";
         echo "<td>{$linha['funNome']}</td>";
         echo "<td>{$linha['funSenha']}</td>";
         echo "<td>{$linha['funEmail']}</td>";
         echo "<td>{$linha['funCargo']}</td>";
         echo "<td>{$linha['funUsuario']}</td>";
         echo "<td>{$linha['funFoto']}</td>";


        echo "<td><a href='alterar_funcionario.php?id={$linha['funId']}' class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
        echo "<td><a href='deletar_funcionario.php?id={$linha['funId']}' class='btn-floating blue'><i class='material-icons'>delete</i></a></td></tr>";
      }
      echo "</table>";
      echo "<a href='form_cad_func.php' class='btn'>Adicionar funcionário</a>";
     // include_once 'rodape.php';
      
      ?>



