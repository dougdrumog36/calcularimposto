<?php

require_once("../model/usuario.php");

    class usuarioDao {

        public static function calcularAliquota($rendimentoAnual){

            $rendimento12 = 0;

            $rendimento12 = $rendimentoAnual*12;


            if ($rendimento12 <= 22847){
                return 0;
        
            } else if ($rendimento12 >= 22847 && $rendimento12 < 33919) {
                return 7.5;
        
            } else if ($rendimento12 >= 33919 && $rendimento12 < 45012) {
                return 15;
        
            } else if ($rendimento12 >= 45012 && $rendimento12 < 55976) {
                return 22.5;
        
            } else {
                return 27.5;
            }

    }


        public static function calcularImposto($rendimentoAnual){

            $rendimento12 = 0;


            $rendimento12 = $rendimentoAnual*12;


                $aliquota = 0;
                $imposto = 0;

                if ($rendimento12 <= 22847){
                   $aliquota = 0;
            
                } else if ($rendimento12 >= 22847 && $rendimento12 < 33919) {
                    $aliquota = 7.5;
            
                } else if ($rendimento12 >= 33919 && $rendimento12 < 45012) {
                    $aliquota = 15;
            
                } else if ($rendimento12 >= 45012 && $rendimento12 < 55976) {
                    $aliquota = 22.5;
            
                } else {
                    $aliquota = 27.5;
                }
                $imposto = ($rendimento12 * $aliquota) / 100;

                return $imposto = $imposto;

        }


}

?>