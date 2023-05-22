<?php

require_once"../conexao.php";

if(isset($_POST["nome"]) &&
 isset($_POST["login"]) && 
 isset($_POST["senha"])) 
 
 {
   
 //inclui o arquivo para salvar a foto do upload
require_once"salvar_foto.php";

$nome =       $_POST["nome"];
$login =  $_POST["login"];
$senha =    password_hash  ($_POST["senha"], PASSWORD_DEFAULT);
$foto =       $nome_arquivo;

//String com o comando SQL oara ser executado do DB
$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`) 
VALUES (?, ?, ?, ?);";
       
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->prepare($sql);

 //adicionar od valores nos parâmetros
 $comando->bind_param("ssss",$nome, $login,$senha,$foto);

//executa o SQL - Comando no Banco de Dados
$comando->execute();
}
//abre o arquivo form.php
header("Location: usuarios.php");
?>