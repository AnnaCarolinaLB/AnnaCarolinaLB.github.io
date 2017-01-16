<?php
// Conexao com banco de Dados mysql
$server = "localhost" ;
$db = "ger_tarefas" ;
$user = "root" ;
$senha = "";

$conexao = mysqli_connect($server, $user, $senha);
$selectdb = mysqli_select_db($conexao, $db);
