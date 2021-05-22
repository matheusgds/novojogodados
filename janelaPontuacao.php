<!DOCTYPE html>
<?php

function returnURLIMG($i) {
    switch ($i) {
        case 1:
            return "IMG/1.png";
            break;
        case 2:
            return "IMG/2.png";
            break;
        case 3:
            return "IMG/3.png";
            break;
        case 4:
            return "IMG/4.png";
            break;
        case 5:
            return "IMG/5.png";
            break;
        case 6:
            return "IMG/6.png";
            break;
        default :
            return "";
            break;
    }
}

$dado1c = rand(1, 6);
$dado2c = rand(1, 6);
$dado1p = rand(1, 6);
$dado2p = rand(1, 6);

$valor1 = (int) $dado1c + (int) $dado2c;
$valor2 = (int) $dado1p + (int) $dado2p;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Jogo Dos Dados</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>
        <div>
            <h2> <?php
                if ($valor1 == $valor2):
                    echo "Empate";
                elseif ($valor1 > $valor2):
                    echo "Computador Ganhou!";
                elseif ($valor1 < $valor2):
                    echo "Pessoa Jogadora Ganhou!";
                endif;
                ?>
            </h2>
        </div>

        <div name="divjogador" id="divjogador">
            <h1> PESSOA </h1>
            <div>
                <img style="margin-left:10px" src=<?php echo returnURLIMG($dado1p); ?> >
                <h2 name ="h2dado1p" id="h2dado1p"> <?php echo $dado1p; ?></h2>

                <img style="margin-left:10px" src=<?php echo returnURLIMG($dado2p); ?> >
                <h2 name ="h2dado2p" id="h2dado2p"><?php echo $dado2p; ?></h2>
                <br><br>
                <h2 name ="h2dado2p" id="h2dado2p"><?php echo $dado1p; ?>+<?php echo $dado2p; ?> = <?php echo $valor2; ?></h2>

            </div>
        </div>
        <div name="divcomputador" id="divcomputador">
            <h1> COMPUTADOR </h1>
            <div>
                <img style="margin-left:10px" src=<?php echo returnURLIMG($dado1c); ?> >
                <h2 name ="h2dado1c" id="h2dado1c"> <?php echo $dado1c; ?></h2>

                <img style="margin-left:10px" src=<?php echo returnURLIMG($dado2c); ?> >
                <h2 name ="h2dado2c" id="h2dado2c"><?php echo $dado2c; ?> </h2>
                <br><br>
                <h2 name ="h2dado1c" id="h2dado1c"> <?php echo $dado1c; ?>+<?php echo $dado2c; ?> = <?php echo $valor1; ?></h2>

            </div>
        </div>



    </body>
</html>