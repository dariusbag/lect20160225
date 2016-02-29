<?php
// 4. Surasti masyvo elementų (sveikųjų skaičių) didžiausią ir mažiausią reikšmes
include_once 'functions/functions.php';

// generating array of random numbers and printing
$numArr = randArr(-100, 100, 16);
echo 'Atsitiktinių skaičių eilė: ';
foreach($numArr as $element){
    echo $element .'; ';
}
echo '<br />';

$minMax = findMinMax($numArr);

echo 'Mažiausias: '. $minMax[0] .', ';
echo 'Didžiausias: '. $minMax[1];

?>
