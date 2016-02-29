<?php
// 5. Surikiuotų masyvo elementus (sveikus skaičius) nuo didžiausio iki mažiausio;
include_once 'functions/functions.php';

// generating array of random numbers and printing
$numArr = randArr(-100, 100, 16);
echo 'Atsitiktinių skaičių eilė: ';
foreach($numArr as $element){
    echo $element .'; ';
}
echo '<br />';

// sorting array
sort($numArr);

echo 'Išrikiuotų skaičių eilė: ';
foreach($numArr as $element){
    echo $element .'; ';
}
?>
