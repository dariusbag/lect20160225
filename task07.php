<?php
// 7. Iš masyvo pašalintų visus neigiamus skaičius;
include_once 'functions/functions.php';


// generating array of random numbers and printing
$numArr = randArr(-100, 100, 16);
echo '﻿Atsitiktinių skaičių eilė: ';
foreach($numArr as $element){
    echo $element .'; ';
}
echo '<br />';

// removing negative numbers
$positives = removeNegatives($numArr);
echo 'Neneigiamų skaičių eilė: ';
foreach($positives as $element){
    echo $element .'; ';
}

?>
