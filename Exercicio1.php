<?php

function SeculoAno($ano){
    if($ano % 100 == 0) {
        $seculo = $ano / 100;
    }
    else {
        $seculo = $ano / 100 + 1;
    }
    return $seculo;
}

echo(intval(SeculoAno(1905)));
echo("\n".intval(SeculoAno(1700)));

