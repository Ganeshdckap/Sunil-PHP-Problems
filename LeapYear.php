<?php
$year = 2024; 

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}


if (isLeapYear($year)) {
    echo $year . " is a leap year.";
} else {
    echo $year . " is not a leap year.";
}
?>
