<?php

    class usuario{

        private $nomeUsuario;

        private $cpfUsuario;

        private $rendimentoUsuario;

        private $aliquotaUsuario;

        private $impostoUsuario;

       

        public function setNomeUsuario($nome){
            $this->nomeUsuario = $nome;
            
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        

        public function setCPFUsuario($cpf){
            $this->cpfUsuario = $cpf;
            
        }

        public function getCPFUsuario(){
            return $this->cpfUsuario;
        }

        public function setRendimentoUsuario($rendimento){
            $this->rendimentoUsuario = $rendimento;
            
        }

        public function getRendimentoUsuario(){
            return $this->rendimentoUsuario;
        }
        

        public function setAliquotaUsuario($aliquota){
            $this->aliquotaUsuario = $aliquota;
            
        }

        public function getAliquotaUsuario(){
            return $this->aliquotaUsuario;
        }

        public function setImpostoUsuario($imposto){
            $this->impostoUsuario = $imposto;
            
        }

        public function getImpostoUsuario(){
            return $this->impostoUsuario;
        }

       


    
    }

    ?>