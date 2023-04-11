<?php
    session_start();
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/estilo2.css" rel="stylesheet"> 

    <title>Calculo</title>
</head>

<body>
    

    <main>


   

    <div class="container" style=" margin-left: 35% ">

        <div class="title">
            Calcular Imposto
           </div>

        <form id="form" action="./controller/calcform.php" method="post">

                <div class="text">
                    <label> Nome: </label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o seu Nome" >
                </div>

                <div class="text">
                    <label> CPF: </label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digito seu CPF" >
                </div>

                <div class="text">
                    <label> Rendimento Mensal:⠀</label>
                    <input type="text" name="rendimento_anual" id="rendimento_anual" placeholder="Digite o seu rendimento" >
                </div>

                <div class="input-group">
                    <button type="submit" id="btn" >Calcular</button>
                </div>

            </form>
    </div>

        </main>

</body>

</html>