<!DOCTYPE html>
<?php
$opcoes = [1, 2, 3, 4, 5, 6];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Jogo Dos Dados</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>
        <div name = "divprincipal" id="divprincipal">
            <h1 name="title" id="title"> Jogo Dos Dados </h1>

            <div>
                <label name="lblJogar" id="lblJogar">Para Iniciar o jogo Clique no botão abaixo!</label>
                </br> </br>
                <a href="janelaPontuacao.php"><input name="btnJogar" id="btnJogar" type="submit" value="Jogar os Dados"></a>
            </div>

            <?php
            ?>
        </div>
    </body>
</html>
