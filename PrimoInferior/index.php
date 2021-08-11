<?php
 $cont = 0;
 $primo;
    function PrimoInferior($num){
        global $cont,$primo;
       if($num<0){
           echo ("0");
       }else{
        for($i = 1 ; $i<$num ; $i++){
            for($y = 1 ; $y <=$i ; $y++){
                if($i % $y == 0){
                    $cont++;
                }
                
            }
            if($cont == 2){
                $primo = $i;
               
            }
            $cont=0;
        }
       }
       echo $primo;
    }
    PrimoInferior(30);
?>