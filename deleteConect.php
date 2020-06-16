<?php
$id=$_POST['id'];
$senha=$_POST['Senha'];

$local="localhost";
$user="root";
$pass="";
$data="db_projeto_php";


$connection = new mysqli($local,$user,$pass,$data);

if($connection->connect_error){
    die("Erro na conexão".$connection->connect_error."<br>");
};

$del = "DELETE FROM alunos WHERE id_aluno='$id' AND senha='$senha'";

if ($connection->query($del)=== true) {

  echo "<script>
  alert('Dados Apagados');
  window.location.href = 'home.php';
  </script>";
}
else {
  echo "<script>
  alert('Alguma coisa está errada, dados não apagados!');
  window.location.href = 'delete.php';
  </script>".$connection->error;
   
}
   

$connection->close();

?>