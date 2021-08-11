<?php
$cont = 0;
$sec = 1;
    function SeculoAno($ano){
        global $cont, $sec;
        for($i = 1 ; $i < $ano ; $i++){
            $cont++;
            if($cont == 100){
                $sec++;
                $cont = 0;
            }
        }
        echo $sec;
    }

    
     SeculoAno(1700);

?>