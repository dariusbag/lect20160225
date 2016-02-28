<?php
// 8. Apskaičiuotų masyvo elementų (sveikųjų skaičių), kurie be liekanos dalijasi iš 3, sumą.
include_once 'functions/functions.php';

$str = '8 -10 8! 9? 8. 8, dfg fhsh 2.5 -891, egertg. -15.8 werwrey gwe 89.2, rgsdfg 8548. -1 0 gwfdg';

// converting string to array
$arr = strToArray($str);

// removing punctuation except decimal point
$arrClean = removePunctuation($arr);

// get numbers from array
$numList = getNums($arrClean);

// get integers from array
$intList = getInts($numList);

// trimming dots from endings
$rr = trimDots($intList);

foreach($rr as $element){
    if (($element % 3) == 0){
        echo $element .'<br />';
    }
}

?>
