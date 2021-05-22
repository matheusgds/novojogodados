<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Jogo Dos Dados</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>
        <script type="text/javascript">
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
                var dado1c = Math.random() * (6 - 1) + 1;
                var dado2c = Math.random() * (6 - 1) + 1;
                var dado1p = Math.random() * (6 - 1) + 1;
                var dado2p = Math.random() * (6 - 1) + 1;

                var valor1 = dado1c + dado2c;
                var valor2 = dado1p + dado2p;


                if (valor1 == valor2) {
                    document.getElementById("divpontos").innerHTML = "Empate!";
                } else if (valor1 > valor2) {
                    document.getElementById("divpontos").innerHTML = "Computador Ganhou!";
                } else {
                    document.getElementById("divpontos").innerHTML = "Pessoa Jogadora Ganhou!";
                }
            }
            
            window.onload = pegarvalor();
        </script>
        <div>
            <h2 id="divpontos">Pontuação: </h2>
        </div>

        <div name="divjogador" id="divjogador">
            <h1> PESSOA </h1>
            <div>


            </div>
        </div>
        <div name="divcomputador" id="divcomputador">
            <h1> COMPUTADOR </h1>

        </div>



    </body>
</html>