<?php
 include ('conexao.php');

$sStatus = $_POST['status'];
$idAltera = $_POST['id_altera'];
$xAltera = mysqli_query($conexao, "UPDATE tarefas SET status = '$sStatus' WHERE id = '$idAltera'");

if ($xAltera) 
{
    echo "Alteracao realizada com sucesso!";
}
else 
{
    echo "Alteração não realizada!";
}
