<?php
function fibonacciSeries($n) {
    $a = array();
    
    $a[0] = 0; 
    $a[1] = 1; 
    
    
    for ($i = 2; $i < $n; $i++) {
        $a[$i] = $a[$i - 1] + $a[$i - 2];
    }
    
    
    for ($i = 0; $i < $n; $i++) {
        echo $a[$i] . " ";
    }
}

$n = 10;

fibonacciSeries($n);
?>
