<?php
include_once 'functions/functions.php';
$arr = [0, 89, 2, -52];

$minMax = findMinMax($arr);

echo 'Minimum is: '. $minMax[0] .', ';
echo 'maximum is: '. $minMax[1];

?>
