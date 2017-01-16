<?php 
include ('conexao.php');
?>
<html>
    <head>
        <title>Lista de Tarefas</title>
    </head>
    <body>
        <table width="100%" border="1" cellspacing="5">
            <tr>
                <td><div align="center"><strong>ID</strong></div></td>
                <td><div align="center"><strong>Data</strong></div></td>
                <td><div align="center"><strong>Tarefa</strong></div></td>
                <td><div align="center"><strong>Urgente?</strong></div></td>
                <td><div align="center"><strong>Responsável</strong></div></td>
                <td><div align="center"><strong>Status</strong></div></td>
                <td><div align="center"><strong>Ações</strong></div></td>
            </tr>
<?php  
        $xSql = mysqli_query($conexao, "SELECT * FROM `tarefas` ORDER BY `urgente` desc, `data`");

        while ($row = mysqli_fetch_array($xSql)) 
        {
                    $iId           = $row['id'];
                    $dData         = $row['data'];
                    $sTarefa       = $row['tarefa'];
                    $sUrgente      = $row['urgente'];
                    $sResponsavel  = $row['responsavel'];
                    $sStatus       = $row['status'];

        echo "  <tr>
                    <td>$iId</td>
                    <td>$dData</td>
                    <td>$sTarefa</td>
                    <td>$sUrgente</td>
                    <td>$sResponsavel</td>
                    <td>$sStatus</td>
                    <td align='center'>
                        <form id='formAbrir' name='formAbrir' method='post' action='conteudo_tarefa.php'>
                            <input name='busca' type='hidden' id='busca' value='$iId'>
                            <input type='image' title='Abrir' src='imagens/iconabrir.jpg' value='submit'>
                        </form>
                        <form id='formExcluir' name='formExcluir' method='post' action='processa_exclusao_tarefa.php'>
                            <input name='id_deleta' type='hidden' id='id_deleta' value='$iId' />
                            <input type='image' title='Excluir Tarefa' src='imagens/excluir.jpg' value='submit'  />
                        </form>
                    </td>
                </tr>";  
        }
?>
        </table>
    </body>
</html>
