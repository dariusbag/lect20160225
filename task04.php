<?php
$arr = [0, 89, 2, -52];

$minMax = findMinMax($arr);

foreach($minMax as $i){
    echo $i .'<br />';
}

function findMin($ar){
// finding minimumm in array
    $minimum = $ar[0];
    foreach($ar as $i){
        if($i <= $minimum){
            $minimum = $i;
        }
    }
    return $minimum;
}

function findMax($ar){
// finding maximum in array
    $maximum = $ar[0];
    foreach($ar as $i){
        if($i >= $maximum){
            $maximum = $i;
        }
    }
    return $maximum;
}

function findMinMax($ar){
// returns minimum and maximum in array
    $min = findMin($ar);
    $max = findMax($ar);
    $minMax = [$min, $max];
    return $minMax;
}

?>

