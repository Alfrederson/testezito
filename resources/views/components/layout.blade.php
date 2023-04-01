<html>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<head>
    <title>CRUD de Clientes</title>
    <style>
        body{
            font-family: monospace;
            background-color:black;
            color:lime;
            max-width:210mm;
            margin-left:auto;
            margin-right:auto;
            overflow-x:clip;
        }

        a:visited{
            color:red;
        }
        a{
            color:white;
        }
        .miolo{
            width: 80vw;
            margin-left:auto;
            margin-right:auto;
        }
    </style>
</head>
<body>
<pre>
    
 ▄████▄   ██▀███   █    ██ ▓█████▄ ▓█████    ▓█████▄ ▓█████     ▄████▄   ██▓     ██▓▓█████  ███▄    █ ▄▄▄█████▓▓█████   ██████    
▒██▀ ▀█  ▓██ ▒ ██▒ ██  ▓██▒▒██▀ ██▌▓█   ▀    ▒██▀ ██▌▓█   ▀    ▒██▀ ▀█  ▓██▒    ▓██▒▓█   ▀  ██ ▀█   █ ▓  ██▒ ▓▒▓█   ▀ ▒██    ▒    
▒▓█    ▄ ▓██ ░▄█ ▒▓██  ▒██░░██   █▌▒███      ░██   █▌▒███      ▒▓█    ▄ ▒██░    ▒██▒▒███   ▓██  ▀█ ██▒▒ ▓██░ ▒░▒███   ░ ▓██▄      
▒▓▓▄ ▄██▒▒██▀▀█▄  ▓▓█  ░██░░▓█▄   ▌▒▓█  ▄    ░▓█▄   ▌▒▓█  ▄    ▒▓▓▄ ▄██▒▒██░    ░██░▒▓█  ▄ ▓██▒  ▐▌██▒░ ▓██▓ ░ ▒▓█  ▄   ▒   ██▒   
▒ ▓███▀ ░░██▓ ▒██▒▒▒█████▓ ░▒████▓ ░▒████▒   ░▒████▓ ░▒████▒   ▒ ▓███▀ ░░██████▒░██░░▒████▒▒██░   ▓██░  ▒██▒ ░ ░▒████▒▒██████▒▒   
░ ░▒ ▒  ░░ ▒▓ ░▒▓░░▒▓▒ ▒ ▒  ▒▒▓  ▒ ░░ ▒░ ░    ▒▒▓  ▒ ░░ ▒░ ░   ░ ░▒ ▒  ░░ ▒░▓  ░░▓  ░░ ▒░ ░░ ▒░   ▒ ▒   ▒ ░░   ░░ ▒░ ░▒ ▒▓▒ ▒ ░   
  ░  ▒     ░▒ ░ ▒░░░▒░ ░ ░  ░ ▒  ▒  ░ ░  ░    ░ ▒  ▒  ░ ░  ░     ░  ▒   ░ ░ ▒  ░ ▒ ░ ░ ░  ░░ ░░   ░ ▒░    ░     ░ ░  ░░ ░▒  ░ ░   
░          ░░   ░  ░░░ ░ ░  ░ ░  ░    ░       ░ ░  ░    ░      ░          ░ ░    ▒ ░   ░      ░   ░ ░   ░         ░   ░  ░  ░     
░ ░         ░        ░        ░       ░  ░      ░       ░  ░   ░ ░          ░  ░ ░     ░  ░         ░             ░  ░      ░     
░                           ░                 ░                ░                                                                  

</pre>

    <div class="miolo">
        {{ $slot }}
    </div>

</body>
</html>