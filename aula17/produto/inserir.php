<?php

require_once"../conexao.php";

$nome =      $_POST["nome"];
$descricao = $_POST["descricao"];
$preco =     $_POST["preco"];

//String com o comando SQL oara ser executado do DB
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) 
VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
        echo$sql;
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->multi_query($sql);

 //adicionar od valores nos parâmetros
 //$comando->bind_param("ssds", "a","b","1,"c");

//executa o SQL - Comando no Banco de Dados
//$comando->execute();

//abre o arquivo form.php
//header("Location: fotm.php");
?>