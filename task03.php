<?php
// 3. Nustatytų ar skaičius pirminis (intervale nuo 1 iki 999) pvz 11, 13, 17, 19 ir t.t.
include_once 'functions/functions.php';

// takes number and returns true if it is prime and false if is not
function isPrime($num){
    if($num < 1){
        return false;
    }else{
        for ($i = 2; $i < $num; $i++){
            echo $num .' / '. $i .' remainder is '. $num % $i .'<br />';
            
            if (($num % $i) == 0){
                echo $num .' / '. $i .' remainder is '. $num % $i .'<br />'; //return false;
            }else{
                return true;
            }
        }
    }
}

$test = isPrime(15);

var_dump($test);
echo 'Užtingėjau su šituo';

?>
