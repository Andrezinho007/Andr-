<?php

require_once"../conexao.php";


//String com o comando SQL oara ser executado do DB
$sql = "SELECT * FROM `usuario` ";
        
//Prepara o SQL par ser executado no banco de dados
 $comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando ->get_result();

//cria um vetor vazio
$usuario = [];

//Pegar a primeira linha de resultado
 while ($usuario = $resultado ->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $usuarios[] = $usuario;

 }

?>