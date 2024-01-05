<?php 
  require_once 'config.php'; // inclui a conexao do banco de dados
 
 if(isset($_POST['btncadastrar'])){
    $nome = filter_input(INPUT_POST,'txtnome'); //filtr_input = ele vai fazer uma filtragem da entrada e atribuir o campo txt e input_pot é o comando que vai fazer a busca e colocar na variavel nome
    $fone = filter_input(INPUT_POST,'txtsenha');
    $email = filter_input(INPUT_POST,'txtemail');
    $cargo = filter_input(INPUT_POST,'txtcargo');
    $usuario = filter_input(INPUT_POST,'txtusuario');
    $foto = filter_input(INPUT_POST,'txtfoto');
    $senha = filter_input(INPUT_POST,'txtsenha');
    
    
    
    
    $sql = $conexao -> prepare("INSERT INTO tabfuncionarios (funNome,funSenha,funEmail,funCargo,funUsuario,funFoto) VALUES (:nome, :senha, :email,:cargo, :usuario, :foto)");
    $sql -> bindValue (':nome', $nome);
    $sql -> bindValue (':senha', $senha);
    $sql -> bindValue (':email', $email);
    $sql -> bindValue (':cargo', $cargo);
    $sql -> bindValue (':usuario', $usuario);
    $sql -> bindValue (':foto', $foto);
    $sql -> execute();
    header('Location:listar_funcionarios.php');
}
?>