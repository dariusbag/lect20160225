<?php

// function total($arr)
// function randArr($start, $end, $amount)
// function findIteratives($arr, $it)
// function trimDots($arr)
// function removeNegatives($arr)
// function getNums($arr)
// function getInts($arr)
// function getElements($arr, $int)
// function longestLen($arr)
// function strToArray($text)
// function removeDots($text)
// function removePunctuation($text)
// function intervalToArray($start, $end)
// function extractOdds($list)
// function findMin($ar)
// function findMax($ar)
// function findMinMax($ar)

function total($arr){
    // takes array of numbers
    // returns sum of all elements as number
    $total = 0;
    foreach($arr as $element){
        $total = $total + $element;
    }
    return $total;
}

function randArr($start, $end, $amount){
    // takes start and end of range as parametters, and amount of element needed
    // returns array of random digits
    $arrOut = [];
    for ($i = 0; $i < $amount; $i++){
        $arrOut[] = rand($start, $end);
    }
    return $arrOut;
}

function findIteratives($arr, $it){
    // takes array of integers and integer as iterative
    // returns array of integers which are divisible by iterative
    $arrOut = [];
    foreach($arr as $element){
        if (($element != 0) && (($element % 3) == 0)){
            $arrOut[] = $element;
        }
    }
    return $arrOut;
}

function trimDots($arr){
    // gets array of elements
    // trims dots from end of elements, returns array of clean elements
    $cleanArr = [];
    foreach($arr as $element){
        $trimmed = rtrim($element, '.');
        $cleanArr[] = $trimmed;
    }
    return $cleanArr;
}

function removeNegatives($arr){
    // takes array of numbers
    // returns array of not negative numbers
    $arrOut = [];
    foreach ($arr as $element){
        if ($element >= 0){
            $arrOut[] = $element;
        }
    }
    return $arrOut;
}

function getNums($arr){
    // takes array of elements
    // returns array of numbers
    $arrInts = [];
    foreach($arr as $element){
        if(is_numeric($element)){
            $arrInts[] = $element;
        }
    }
    return $arrInts;
}

function getInts($arr){
    // takes array of numbers
    // returns array of integers
    $arrInts = [];
    foreach($arr as $element){
        if($element == round($element)){
            $arrInts[] = $element;
        }
    }
    return $arrInts;
}

function getElements($arr, $int){
    // takes array of strings and integer
    // returns array of elements that's length match the integer
    $longestEl = [];
    foreach ($arr as $element){
        if (strlen($element) == $int){
            $longestEl[] = $element;
        }
    }
    return $longestEl;
}

function longestLen($arr){
    // takes array of strings
    // returns length of the longest element as integer
    $longest = 0;
    foreach ($arr as $element){
        if ((strlen($element)) > $longest){
            $longest = strlen($element);
        }
    }
    return $longest;
}

function strToArray($text){
    // takes string
    // returns each word in array and removes multiple spaces
    $arr = explode(' ', $text);
    $arrText = [];
    foreach ($arr as $i){
        if ((strlen($i)) != 0){
            $arrText[] = $i;
        }
    }
    return $arrText;
}

function removeDots($text){
    // takes string and removes dots
    // returns string without dots
    $punct = ['.'];
    $arPunctFree = str_replace($punct, '', $text);
    return $arPunctFree;
}

function removePunctuation($text){
    // takes string and removes punctuation signs except '.'
    // returns string without punctuation
    $punct = [',', ':', ';', '?', '!'];
    $arPunctFree = str_replace($punct, '', $text);
    return $arPunctFree;
}

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

