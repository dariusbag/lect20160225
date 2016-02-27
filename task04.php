<?php
include 'functions/functions.php';
$arr = [0, 89, 2, -52];

$minMax = findMinMax($arr);

foreach($minMax as $i){
    echo $i .'<br />';
}

?>
