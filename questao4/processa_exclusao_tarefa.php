<?php
include ('conexao.php');

$idDeleta = $_POST['id_deleta'];
$xApagar = mysqli_query($conexao, "DELETE FROM `tarefas` WHERE id = '$idDeleta'");

if ($xApagar) 
{
    echo "Tarefa N° $idDeleta excluida com sucesso!";
} 
else 
{
    echo "Não foi possível excluir!";
}
