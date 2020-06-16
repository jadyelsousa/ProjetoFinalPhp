<?php


$usuario="root";
$servidor="localhost";
$senha="";
$banco="bancodeexercicios";

$conecta = new mysqli($servidor,$usuario,$senha,$banco);
if($conecta->connect_error){
    die ("Conexão falhou:".$conecta->connect_error."<br>");
}
echo "Conexão realizada com sucesso"."<br>";

$base = "CREATE DATABASE bancodeexercicios";
if($conecta->query($base)===true){
    echo "Banco de dados criado com sucesso."."<br>";
}
else{
    echo "Erro na criação do Banco".$conecta->connect_error."<br>";

} 

$entidade = "CREATE TABLE pessoa (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    email VARCHAR(80) NOT NULL,
    senha VARCHAR(20) NOT NULL
    )";
    if ($conecta->query($entidade)===TRUE) {
        echo "Tabela criada com sucesso.<br>";
    }
    else{
        echo "Erro na criação da tabela".$conecta->connect_error."<br>";

    }
   

$dados="INSERT INTO pessoa(nome,email,senha) VALUES
        ('Rogerio','rogerio@gmail.com','65htf'),
        ('Aurora','adeus@gmail.com','robozin'),
        ('João','joao_s435@gmail.com','12345'),
        ('Arlindo','lindoar@gmail.com','lindo123')";

    if($conecta->query($dados)){
        echo "Dados inseridos no banco.<br>";
    }  
    else {
        echo "Erro ao inserir dados.".$conecta->error."<br>";
    }

    
$conecta->close();


?>