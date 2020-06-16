<?php

$nome=$_POST['Nome'];
$curso=$_POST['Curso'];
$telefone=$_POST['Telefone'];
$email=$_POST['Email'];
$sexo=$_POST['Sexo'];
$cidade=$_POST['Cidade'];
$estado=$_POST['Estado'];
$senha=$_POST['Senha'];

//conectando

$local="localhost";
$user="root";
$pass="";
$data="db_projeto_php";


$connection = new mysqli($local,$user,$pass,$data);

if($connection->connect_error){
    die("Erro na conexão".$connection->connect_error."<br>");
};

$inserir="INSERT INTO alunos(nome,curso,telefone,email,sexo,cidade,estado,senha) VALUES
    ('$nome','$curso','$telefone','$email','$sexo','$cidade','$estado','$senha')";

if ($connection->query($inserir)===TRUE) {
    echo "<script>
    alert('Usuário Cadastrado');
    window.location.href = 'home.php';
    </script>";
}
else{
    echo "<script>
    alert('Não foi possível inserir os dados, check as informações.');
    window.location.href = 'cadastro.php';
    </script>".$connection->connect_error."<br>";
};

$connection->close();


?>