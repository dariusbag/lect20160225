<?php
// 2. Atspausdintų visus nelyginius sveikuosius skaičius nuo 1 iki 99
include_once 'functions/functions.php';

// get two parameters from user
// check if both are numbers

// get array of numbers in range
$interval = (intervalToArray(1,99));

// extract odd numbers
$oddNumbers = extractOdds($interval);

echo 'Nelyginių skaičių eilė nuo 1 iki 99: <br />';
// loop through array
foreach($oddNumbers as $i){
    echo $i .' ';
};



?>
