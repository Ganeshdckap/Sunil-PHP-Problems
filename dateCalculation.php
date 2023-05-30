<?php

// date calculaton

$startDate = '2023-01-01';
$endDate = '2023-02-10';

$start = new DateTime($startDate);
$end = new DateTime($endDate);

$interval = $start->diff($end);
$days = $interval->days;

echo "Number of days $days";
