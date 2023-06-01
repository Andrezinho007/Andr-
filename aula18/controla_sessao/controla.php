<?php

//sempre que for trabalhar com sessões necessário
//iniciar a sessão
session_start();

//verifica a existe a varíavel de sessão chamada usuário
 if(!isset($_SESSION['usuario'])){
    header("Location: ../controla_sessao/form_login.php");
 }

?>