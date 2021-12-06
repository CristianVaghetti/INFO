<?php
function PrimoInferior($num) {
    $num--;
    while (verificaPrimo($num) == False){
        $num--;
    }
    return $num;
    
}

function verificaPrimo($num) {
    $divisivel = 0;
    for ($cont = 1; $cont <= $num; $cont ++) {
        if ($num % $cont == 0) {
            $divisivel ++;
        }
    }
    if($divisivel > 2){
        return False;
    }
    else{
        return True;
    }
}

echo(PrimoInferior(201));