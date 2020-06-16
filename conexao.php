<?php


$usuario="root";
$servidor="localhost";
$senha="";
$banco="db_projeto_php";

$conecta = new mysqli($servidor,$usuario,$senha,$banco);
if($conecta->connect_error){
    die ("Conexão falhou:".$conecta->connect_error."<br>");
}


?>