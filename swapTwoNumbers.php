<?php

function swapNumber($a,$b){
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo $a." ".$b;
}
swapNumber(15,110);