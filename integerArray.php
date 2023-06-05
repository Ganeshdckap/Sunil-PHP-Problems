<?php

function sortAscending($arr) {
    sort($arr);
    return $arr;
}

function sortDescending($arr) {
    rsort($arr);
    return $arr;
}

$numbers = array(4, 2, 8, 6, 5);

$ascendingOrder = sortAscending($numbers);
echo "Ascending Order: ";
foreach ($ascendingOrder as $number) {
    echo $number . " ";
}
echo "\n";

// Sort in descending order
$descendingOrder = sortDescending($numbers);
echo "Descending Order: ";
foreach ($descendingOrder as $number) {
    echo $number . " ";
}
?>
