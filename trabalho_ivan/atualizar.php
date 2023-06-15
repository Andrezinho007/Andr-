<?php
require_once "../conexao.php";

if(isset($_POST["nome"]))
{


 $nome = $_POST["nome"];
 $cnpj = $_POST["cnpj"];
 $email = $_POST["email"];
 $telefone = $_POST["telefone"];
 $idfornecedores = $_POST["id"];
 //string com o comendo sql para ser executoado no db
 $sql = "UPDATE fornecedores SET `nome`=?, `cnpj`=?, `email`=?, `telefone`=? WHERE  `idfornecedores`=?;";
 //prepara o slq para ser executado no banco de dados
 $comando=$conexao->prepare($sql);
 //adiciona os valores nos parametros
 $comando->bind_param("ssssi", $nome, $cnpj, $email, $telefone, $idfornecedores);
 //executa o sql - comando no banco de dados
 $comando->execute();
 //abre o arquivo form.php
}
 header("location: index.php");
