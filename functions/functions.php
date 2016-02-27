<?php
function findMin($ar){
// takes array of numbers
// returns the smallest number
    $minimum = $ar[0];
    foreach($ar as $i){
        if($i <= $minimum){
            $minimum = $i;
        }
    }
    return $minimum;
}

function findMax($ar){
// takes array of numbers
// returns the biggest number
    $maximum = $ar[0];
    foreach($ar as $i){
        if($i >= $maximum){
            $maximum = $i;
        }
    }
    return $maximum;
}

function findMinMax($ar){
// takes array of numbers
// returns minimum and maximum in array
    $min = findMin($ar);
    $max = findMax($ar);
    $minMax = [$min, $max];
    return $minMax;
}

?>

