<?php

require_once "../conexao.php";

if(isset($_POST["nome"]) && isset($_POST["cnpj"]) 
 && isset($_POST["email"]) && isset($_POST["telefone"]))
{


     
$nome =      $_POST["nome"];
$cnpj = $_POST["cnpj"];
$email =     $_POST["email"];
$telefone = $_POST["telefone"];

//String com o comando SQL para ser executado no DB
$sql = "UPDATE fornecedor SET 
`nome`= ?, `cnpj`= ?, `email`= ?, `telefone`= ? 
WHERE  `idfornecedor`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssss", $nome, $cnpj, $email, $telefone);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");