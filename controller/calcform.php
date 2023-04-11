<?php
 session_start();
require("../model/usuario.php");
require("../dao/usuarioDAO.php");


    $usuario = new usuario();
    $usuarioDao = new usuarioDao();

    $usuario->setNomeUsuario($_POST['nome']);
    $usuario->setCPFUsuario($_POST['cpf']);
    $usuario->setRendimentoUsuario($_POST['rendimento_anual']);
    $nome = $usuario->getNomeUsuario();
    $cpf = $usuario->getCPFUsuario();
    $rendimento = $usuario->getRendimentoUsuario();

    if($usuario->getNomeUsuario() && $usuario->getCPFUsuario() && $usuario->getRendimentoUsuario()){

  

        $alicota = usuarioDao::calcularAliquota($rendimento);
        $imposto = usuarioDao::calcularImposto($rendimento);


        header("location: ../result.php");
        session_start();
        $_SESSION['nome']  =   $nome;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['rendimento'] = $rendimento;
        $_SESSION['alicota'] = $alicota;
        $_SESSION['imposto'] = $imposto;

   

    }else{

        header("location: ../index.php");
        $_SESSION['aviso'] = 'COMPLETE TODOS OS CAMPOS DE TEXTOS';
        $_SESSION['tipo'] = 'error';

    }

?>
        