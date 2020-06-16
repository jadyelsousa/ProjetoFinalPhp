<?php

$nome=$_POST['Nome'];
$curso=$_POST['Curso'];
$telefone=$_POST['Telefone'];
$email=$_POST['Email'];
$sexo=$_POST['Sexo'];
$cidade=$_POST['Cidade'];
$estado=$_POST['Estado'];
$senha=$_POST['Senha'];
$novaSenha=$_POST['novaSenha'];

$local="localhost";
$user="root";
$pass="";
$data="db_projeto_php";


$connection = new mysqli($local,$user,$pass,$data);

if($connection->connect_error){
    die("Erro na conexão".$connection->connect_error."<br>");
};

$alter = "UPDATE alunos SET nome = '$nome', curso = '$curso', telefone = '$telefone', email = '$email', sexo = '$sexo', cidade = '$cidade' , estado = '$estado', senha = '$novaSenha' 
WHERE senha = '$senha'";

if ($connection->query($alter) === TRUE) {
  echo "<script>
  alert('Dados atualizados com sucesso!');
  window.location.href = 'home.php';
  </script>";
}
else {
  echo "<script>
  alert('Não foi possível atualizar os dados.');
  window.location.href = 'update.php';
  </script>".$connection->error;
}

$connection->close();

?>