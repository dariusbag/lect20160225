<?php
// 7. Iš masyvo pašalintų visus neigiamus skaičius;
include_once 'functions/functions.php';

$arr = [0, 'b', 'a', -5.2, 1, 0, 59, 89.74, -20158, 2548, -254, 25.5];

// retrieving numbers from array
$numList = getNums($arr);

// removing negative numbers
$positives = removeNegatives($numList);

foreach($positives as $element){
    echo $element .'; ';
}

?>
