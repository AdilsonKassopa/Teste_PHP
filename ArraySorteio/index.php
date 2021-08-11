<?php
    $arrSorteio = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1];
    $cont = 0;
    $repetido1;
    $repetido2;
    $arr ;
    $rec = 0;
    for($i = 0 ; $i < 20;$i++){
        $cont =0;
        for($y = 0 ; $y < 20;$y++){
            if($arrSorteio[$i] == $arrSorteio[$y]){
                $cont++;
            }
        }
        if($rec < $cont){
            $repetido1=$arrSorteio[$i];
            $rec = $cont;
        }else if($rec <= $cont){
            $repetido2 = $arrSorteio[$i];
        }
    }
    if($repetido2 != $repetido1){
        echo ("O número que mais se repetiram é o ".$repetido1." e ".$repetido2."<br>");
    echo (" Eles se repetem ".$rec."  vezes <br>");
    }else{
        echo ("O número que mais se repete é o ".$repetido1."<br>");
        echo (" Ele se repete ".$rec."  vezes <br>");
    }
    
?>