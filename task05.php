<?php
// 5. Surikiuotų masyvo elementus (sveikus skaičius) nuo didžiausio iki mažiausio;
include_once 'functions/functions.php';

$arr = [0, 'b', 'a', -5.2, 1, 0, 59, 89.74, -20158, 2548, -254, 25.5];

// get integers from array
$numList = getNums($arr);
$intList = getInts($numList);

// sorting array
sort($intList);

foreach($intList as $element){
    echo $element .'; ';
}
?>
