<?php
$number = 12345;
function reverseNumber($number) {
    $reversedNumber = 0;
    $digits = strlen((string)$number);

    for ($i = $digits - 1; $i >= 0; $i--) {
        $digit = (int)($number / (10 ** $i)) % 10;
        $reversedNumber += $digit * (10 ** ($digits - $i - 1));
    }

    return $reversedNumber;
}


$reversed = reverseNumber($number);
echo "Original number: $number\n";
echo "Reversed number: $reversed\n";


//-----------------------------------OR----------------------------------

// Function reverseNumber($input){
//     $num=0;
//     for ($i=0; $i<=$input; $i++) { 
//         # code...
//         $num=($num*10)+($input%10);
//         $input=$input/10;
//     }
//     return $num;
// }
//  echo reverseNumber(12345);



?>

