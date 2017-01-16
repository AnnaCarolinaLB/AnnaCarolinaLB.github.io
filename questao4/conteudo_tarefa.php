<?php
include ('conexao.php');
 
$iBusca = $_POST['busca']; 
$sTarefa = mysqli_query($conexao, "SELECT * FROM tarefas WHERE id = '$iBusca'");
$iContagem = mysqli_num_rows($sTarefa);
 
if ($iContagem == 1) 
{
    $row = mysqli_fetch_row($sTarefa);
    $iId            = $row[0];
    $dData          = $row[1];
    $sTarefa        = $row[2];
    $sUrgente       = $row[3];
    $sResponsavel   = $row[4];
    $sStatus        = $row[5];
}
else 
{
    echo "Erro ao encontrar a tarefa!";
}
?>

<html>
    <head>
        <title>Tarefa</title>
    </head>
    <body>
        <p><strong>Registrada em:</strong> <?php echo "$dData"; ?></p>
        <table width="85%" border="0" cellspacing="2">
            <tr>
                <td width="10%"><p><strong>N°</strong> <?php echo "$iId"; ?></p></td>
                <td width="16%"><strong>Urgencia:</strong> <?php echo "$sUrgente"; ?> </td>
                <td width="23%"><strong>Responsável:</strong> <?php echo "$sResponsavel"; ?> </td>
                <td width="15%"><strong>Status:</strong> <?php echo "$sStatus"; ?> </td>
            </tr>
        </table>
        <p><strong>Conteudo:</strong></p>
        <p> <?php echo "$sTarefa"; ?></p>
        <form id="formAlteraTarefa" name="formAlteraTarefa" method="post" action="processa_alteracao_tarefa.php">
            <input name="id_altera" type="hidden" id="id_altera" value="<?php echo "$iId"; ?>" />
            Status:
            <select name="status" id="status">
                <option value="Criado">Criado</option>
                <option value="Aberto">Aberto</option>
                <option value="Resolvido">Resolvido</option>
            </select>
            <input type="submit" name="altera" value="Alterar" />
        </form>
    </body>
</html>
