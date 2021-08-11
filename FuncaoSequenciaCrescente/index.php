<?php
    $arr = [123, -17, -5, 1, 2, 3, 12, 43, 45];
    $cont = 0;
    $recebe = 0;
    $resultado;
    function SequenciaCrescente($array){
        global $cont,$recebe,$resultado;
        for($i = 0 ;$i < count($array);$i++){
            
            if($recebe < $array[$i] && $cont < 2){
                $recebe = $array[$i];
                $resultado = "true";
            }elseif($cont <1){
                $cont++;
                $resultado = "true";
                $recebe = $array[$i];
                }else {
                    $resultado = "false";
                }
            }
            echo $resultado;
            
        }
        
    
    
    SequenciaCrescente($arr);
    echo count($arr);
?>