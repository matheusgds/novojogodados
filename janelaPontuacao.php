<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Jogo Dos Dados</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>

        <div>
            <h2 id="divpontos"></h2>
        </div>

        <div name="divjogador" id="divjogador">
            <h1> PESSOA </h1>
            <div>
                <img style="margin-left:10px" id="imgdado1jogador"> 
                <h2 name ="h2dado1p" id="h2dado1p"></h2>
                <img style="margin-left:10px" id="imgdado2jogador"> 
                <h2 name ="h2dado2p" id="h2dado2p"></h2>
                <br><br>
                <h2 name ="h2dado2p" id="h2geraldadospessoa"></h2>
            </div>
        </div>
        <div name="divcomputador" id="divcomputador">
            <h1> COMPUTADOR </h1>
            <div>
                <img style="margin-left:10px" id="imgdado1computador"> 
                <h2 name ="h2dado1c" id="h2dado1c"></h2>
                <img style="margin-left:10px" id="imgdado2computador"> 
                <h2 name ="h2dado2c" id="h2dado2c"></h2>
                <br><br>
                <h2 name ="h2dado2p" id="h2geraldadoscomputador"></h2>

            </div>
        </div>


        <script type="text/javascript">
            var dado1c = parseInt((Math.random() * (6 - 1) + 1), 10);
            var dado2c = parseInt((Math.random() * (6 - 1) + 1), 10);
            var dado1p = parseInt((Math.random() * (6 - 1) + 1), 10);
            var dado2p = parseInt((Math.random() * (6 - 1) + 1), 10);

            var valor1 = dado1c + dado2c;
            var valor2 = dado1p + dado2p;


            function returnURLIMG(numero) {
                switch (numero) {
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

            function pegarvalor() {
                if (valor1 == valor2) {
                    document.getElementById("divpontos").innerHTML = "Empate!";
                } else if (valor1 > valor2) {
                    document.getElementById("divpontos").innerHTML = "Computador Ganhou!";
                } else {
                    document.getElementById("divpontos").innerHTML = "Pessoa Ganhou!";
                }
            }

            function carregaimgs() {
                document.getElementById("imgdado1jogador").src = returnURLIMG(dado1p);
                document.getElementById("h2dado1p").innerHTML = dado1p;
                document.getElementById("imgdado2jogador").src = returnURLIMG(dado2p);
                document.getElementById("h2dado2p").innerHTML = dado2p;
                document.getElementById("h2geraldadospessoa").innerHTML = dado1p + " + " + dado2p + " = " + valor2;

                document.getElementById("imgdado1computador").src = returnURLIMG(dado1c);
                document.getElementById("h2dado1c").innerHTML = dado1c;
                document.getElementById("imgdado2computador").src = returnURLIMG(dado2c);
                document.getElementById("h2dado2c").innerHTML = dado2c;
                document.getElementById("h2geraldadoscomputador").innerHTML = dado1c + " + " + dado2c + " = " + valor1;
            }

            window.onload = carregaimgs();
            window.onload = pegarvalor();
        </script>
    </body>
</html>