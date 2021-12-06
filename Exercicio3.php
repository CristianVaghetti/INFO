<?php

function fazContagem() {
    $array = array();
    $min = 1;
    $max = 10;
    for ($i = 0; $i <= 19; $i++){
        $num = rand($min, $max);
        array_push($array, strval($num));
    }
    //até aqui foi criado o array de 20 elementos com os numeros aleatorios de 1 a 20 
    foreach ($array as  $value) {
        echo " ".$value;
    }
    // aqui é pra imprimir os numreos que foram gerados
    $novo = array_count_values($array);
    $altoValue = 0;

    foreach($novo as $key => $value){
        if($value > $altoValue){
            $altoValue = $value;
            $maisrepetido = $key;
        }
    }
    // até aqui foi organizado o array e a função array_count_values retorna
    // um novo array com os valores do array anterior e quantas vezes se repetem
    // na sintaxe de |chave = numero gerado => valor = quantas vezes se repete| 
    //depois o foreach é para pegar ver qual o valor mais alto e retorna a respectiva chave.
    echo "\nO número que mais se repete é o: ".$maisrepetido."\nEle se repete ".$altoValue." vezes.";
}


fazContagem();