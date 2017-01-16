<?php
    include ('conexao.php');

    $sTarefa      = $_POST['tarefa'];
    $dData        = date('Y-m-d');   
    $sUrgente     = $_POST['urgente'];
    $sResponsavel = $_POST['responsavel'];
    $sStatus      = $_POST['status'];
    
    $xSql = "INSERT INTO tarefas (`data`, `tarefa`, `urgente` , `responsavel` , `status`)
             VALUES ('$dData', '$sTarefa', '$sUrgente' , '$sResponsavel' , '$sStatus')";

    $xResultado = mysqli_query($conexao, $xSql);

    if ($xResultado) 
    {
        echo "Tarefa registrada com Sucesso!";
    }
