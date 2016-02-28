<?php
// 4. Surasti masyvo elementų (sveikųjų skaičių) didžiausią ir mažiausią reikšmes
include_once 'functions/functions.php';
$arr = [0, 'b', 'a', -5.2, 1, 0, 59, 89.74, -2015.8, 2548, -254, 25.5];

// get integers from array
$numList = getNums($arr);
$intList = getInts($numList);

$minMax = findMinMax($intList);

echo 'Minimum is: '. $minMax[0] .', ';
echo 'maximum is: '. $minMax[1];

?>
