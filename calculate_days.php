<?php

$month = 10; // This can be an input from a form
$year = 1992; // This can be an input from a form

$number = cal_days_in_month(CAL_GREGORIAN, $month, $year);

$dateObj   = DateTime::createFromFormat('!m', $month);
$monthName = $dateObj->format('F');


echo "There were {$number} days in {$monthName} {$year}";
?>
