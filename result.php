<?php
 session_start();
require("./model/usuario.php");
$usuario = new Usuario

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link href="./css/estil.css" rel="stylesheet"> 
</head>
<body>

  <main>
    <div class="container">

      
    <div class="fundo">
      <div class="title">
        Resultado
       </div>

       <div class="text">
        <label>Nome: <span id="nome"></span><?php echo $_SESSION['nome']; ?></label>
       </div>
       
       <div class="text">
        <label>CPF: <span id="cpf"></span><?php echo $_SESSION['cpf']; ?></label>
       </div>
       
       <div class="text">
        <label>Rendimento Mensal: <span id="rendimento"><?php echo $_SESSION['rendimento']; ?></span></label>
       </div>

        <div class="text">
          <label>Alíquota: <span id="aliquota"><?php echo $_SESSION['alicota']; ?></span></label>
        </div> 

        <div class="text">
          <label>Imposto Devido: <span id="impostoDevido"><?php echo $_SESSION['imposto']; ?></span></label>
         </div> 

         <button id="Botao" onclick="window.history.back()">
        VOLTAR
      </button>
  </div>
      </div>
  </main>

</body>
</html>
