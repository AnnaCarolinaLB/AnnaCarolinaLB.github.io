<html>
    <head>
        <title>Tarefas</title>
    </head>
    <body>
        <form id="formNovaTarefa" name="formNovaTarefa" method="post" action="processa_novatarefa.php">
            <p><strong>Descrição da Tarefa:</strong></p>
            <p>
               <textarea name="tarefa" cols="80" rows="10" id="tarefa"></textarea>
            </p>
            <p> Urgente: 
                <select name="urgente" id="urgente">
                    <option value="Sim">Sim</option>
                    <option value="Nao">Não</option>
                </select>
                Responsavel: 
                <input name="responsavel" type="text" id="responsavel" />
                Status:   
                <select name="status" id="status">
                    <option value="Criado" selected="selected">Criado</option>
                    <option value="Aberto">Aberto</option>
                    <option value="Resolvido">Resolvido</option>
                </select>
            </p>
            <p>
                <input type="submit" name="enviar" value="Enviar" />
            </p>
        </form>
    </body>
</html>
