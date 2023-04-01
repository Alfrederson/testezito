<html>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<head>
    <title>CRUD de Clientes</title>
    <style>
        body{
            font-family: monospace;
            max-width:210mm;
            margin-left:auto;
            margin-right:auto;
            overflow-x:clip;
        }

        a:visited{
            color:red;
        }
        a{
            color:black;
        }
        td{
            padding-left:1em;
            padding-right:1em;
            white-space: nowrap;

        }
        .miolo{
            width: 80vw;
            margin-left:auto;
            margin-right:auto;
        }
        .table-holder{
            overflow-x:auto;
        }
        table{
            min-width: fit-content;
        }
        tr:nth-child(2n){
            background-color:rgba(100,100,100,0.1);
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{ $slot }}
    </div>

</body>
</html>