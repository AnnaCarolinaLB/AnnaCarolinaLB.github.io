<html>
    <head>
        <title>Gerenciador de tarefas 1.0</title>
        <style type="text/css">
            body 
            {
                margin:0;
                padding:0;
                font: bold 12px Verdana;
            }

            #tabsJ 
            {
                float:left;
                width:100%;
                background:#F4F4F4;
                font-size:93%;
                line-height:normal;
                border-bottom:1px solid #24618E;
            }

            #tabsJ ul 
            {
                margin:0;
                padding:10px 10px 0 50px;
                list-style:none;
            }

            #tabsJ li 
            {
                display:inline;
                margin:0;
                padding:0;
            }
            
            #tabsJ a 
            {
                float:left;
                background:url("imagens/tableftJ.gif") no-repeat left top;
                margin:0;
                padding:0 0 0 5px;
            }
            
            #tabsJ a span 
            {
                float:left;
                display:block;
                background:url("imagens/tabrightJ.gif") no-repeat right top;
                padding:5px 15px 4px 6px;
                color:#1e6498;
            }
        </style>
    </head>
    <body>
        <div id="tabsJ">
            <ul>
                <li><a href="nova_tarefa.php" target="mainFrame"><span>Nova Tarefa</span></a></li>
                <li><a href="listar_tarefas.php" target="mainFrame"><span>Listar Tarefas</span></a></li>
            </ul>
        </div>
    </body>
</html>
