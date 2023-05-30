<?php
$number = 9;
$limit = 20;

function printTable($number, $limit)
{
    echo "Table of $number:\n";

    for ($i = 1; $i <= $limit; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result\n";
    }
}

printTable($number, $limit);











// (int)$number = readline("Enter the tables number: ");

// $limit = 10;
// if (is_numeric($number)) {

//     for ($i=1; $i <= $limit; $i++) { 

//     $answer = $number * $i;
   
//     echo "$number * $i = $answer \n";

//     }
// }

// else{
//     echo "Please enter numbers only \n";
// }

?>
