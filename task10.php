<?php
$str10 = 'First,    think of variables. in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc. When you create a reference, you are making a second name that points at the same data slot. When you assign one variable to another, you are copying the contents of one data slot to another data slot.';

?>

<?php
// 10. Suskaičiuotų ir atspausdintų kiekvieno simbolio kiekį duotoje eilutėje.
include_once 'functions/functions.php';

// converting string to lowercase
$str10lowCase = letterCases($str10)[0];

// splitting string to array of characters
$arrStr10 = str_split($str10lowCase);

// counting each character in array
$test = symbolCount($arrStr10);

foreach($test as $key => $value){
    echo $key .' - '. $value .'; ';
}



?>
