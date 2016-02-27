<?php
include_once 'functions/functions.php';

// takes number and returns true if it is prime and false if is not
function isPrime($num){
    if($num < 1){
        return false;
    }else{
        for ($i = 2; $i < $num; $i++){
            // echo $num .' / '. $i .' remainder is '. $num % $i .'<br />';
            
            if (($num % $i) == 0){
                return false;
            }else{
                return true;
            }
        }
    }
}

$test = isPrime(21);

var_dump($test);

?>
