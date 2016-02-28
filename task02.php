<?php
// 2. Atspausdintų visus nelyginius sveikuosius skaičius nuo 1 iki 99
include_once 'functions/functions.php';

// get two parameters from user
// check if both are numbers

// get list of numbers in range in array
$interval = (intervalToArray(1,99));

// extract odd numbers
$oddNumbers = extractOdds($interval);

// loop through array
foreach($oddNumbers as $i){
    echo $i .' ';
};



?>
