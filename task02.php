<?php
// 2. Atspausdintų visus nelyginius sveikuosius skaičius nuo 1 iki 99
include_once 'functions/functions.php';

$interval = (intervalToArray(1,99));
$oddNumbers = extractOdds($interval);
foreach($oddNumbers as $i){
    echo $i .' ';
};



?>
