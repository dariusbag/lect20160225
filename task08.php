<?php
// 8. Apskaičiuotų masyvo elementų (sveikųjų skaičių), kurie be liekanos dalijasi iš 3, sumą.
include_once 'functions/functions.php';

// generating array of random numbers and printing
$numArr = randArr(-100, 100, 16);
echo '﻿Atsitiktinių skaičių eilė: ';
foreach($numArr as $element){
    echo $element .'; ';
}
echo '<br />';

// retrieving numbers divisible by 3
$divBy3 = (findIteratives($numArr, 3));
echo 'Eilė skaičių, besidalinančių iš 3: ';
foreach($divBy3 as $element){
    echo $element .'; ';
}
echo '<br />';

// calculating total of numbers
$tot = total($divBy3);
echo 'Suma 3 kartotinių: '. $tot;

?>
