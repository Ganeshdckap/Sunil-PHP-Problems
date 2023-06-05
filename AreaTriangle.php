<?php

$base = readline("Base => ");
$height = readline("Height => ");


if(is_numeric($base) && is_numeric($height)){
    $answer = 1/2 * $base * $height;
    $base = readline("Base => ");
    $height = readline("Height => ");
    
    
    if(is_numeric($base) && is_numeric($height)){
        $answer = 1/2 * $base * $height;
    
        echo $answer."cm²";
    }
    else{
        echo "The value should be in Number";
    }
    echo $answer."cm²";
}
else{
    echo "The value should be in Number";
}


?>