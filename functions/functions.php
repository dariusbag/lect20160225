<?php
// function intervalToArray($start, $end)
// function extractOdds($list)
// function findMin($ar)
// function findMax($ar)
// function findMinMax($ar)

function intervalToArray($start, $end){
// takes 2 numbers
// returns array of numbers in range from start to end
    $arr = [];
    if($start <= $end){
        while ($start <= $end){
            $arr[] = $start;
            $start++;
        }
    }else{
        while($start >= $end){
            $arr[] = $start;
            $start--;
        }
    }
    return $arr;
}

function extractOdds($ar){
// takes array of numbers
// returns array of odd numbers
    $oddsArr = [];
    foreach ($ar as $i){
        if($i % 2 != 0){
            $oddsArr[] = $i;
        }
    }
    return $oddsArr;
}

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

