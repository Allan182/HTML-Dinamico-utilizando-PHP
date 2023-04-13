<?php

function criarCabecalho($titulo)
{
    $header = ' 
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>'. $titulo .'</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            
                <img src="img/googlelogo_color_92x30dp.png" alt="Logo do Google">
                <input class="pesquisa" type="text" placeholder="Pesquise aqui"/>
            
            <ion-icon name="settings-outline"></ion-icon>
        </div>
        ';
    echo $header;
}


function criarSejaBemvindo($usuario)
{

    $msg = "";
    $horario = date("G");


    if ($horario > 5 && $horario <= 12) {
        $msg = "bom dia";
    } else if ($horario > 12 && $horario <= 18) {
        $msg = "boa tarde";
    } else {
        $msg = "boa noite";
    }

    echo '<div class="welcome">
            ' . $usuario . ', Tenha um ' . $msg . '
        </div>';
}


function criarFooter()
{
    echo ' <div class="footer">
    <ul>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#"> Enviar feedback</a></li>
        <li><a href="#">Privacidade</a></li>
        <li><a href="#">Termos</a></li>               
    
    </ul>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
';
}
