<?php

// $number = 6;
// function Prime($number)
// {
   
//     if ($number <= 1) {
//         return false;
//     }
//     else{
//     for ($i = 2; $i <$number; $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }

//     return true;
// }
// }


// if (Prime($number)) {
//     echo $number . " is a prime number.";
// } else {
//     echo $number . " is not a prime number.";
// }



function primeNumber($number){
    $check = "prime";
    for ($i=2;$i<$number;$i++){
        if($number % $i == 0){
            echo  $i;
            $check = "not prime";
            break;
        }
    }
    if ($check == "not prime"){
        echo "its not prime number";
    }else{
        echo "its prime number";
    }
}
primeNumber(21);



?>

