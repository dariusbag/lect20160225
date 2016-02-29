<?php
$str10 = 'First,    think of variables. in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc. When you create a reference, you are making a second name that points at the same data slot. When you assign one variable to another, you are copying the contents of one data slot to another data slot.';

$s = strtolower($str10);
// counting each character in a string
$arr = (count_chars($s, 1));
// looping through array printing keys and values
foreach ($arr as $key => $value){
    echo chr($key) .' - '. $value .'<br />';
}

?>

<?php
// 10. Suskaičiuotų ir atspausdintų kiekvieno simbolio kiekį duotoje eilutėje.
include_once 'functions/functions.php';

echo 'test <br />';
// converting string to lowercase
$str10lowCase = letterCases($str10)[0];

// splitting string to array of characters
$arrStr10 = str_split($str10lowCase);

var_dump($arrStr10);

$count = 0;
$arrLoop = [];
foreach($arrStr10 as $element){
    $arrLoop[$element] = $count;
    $count++;
}

var_dump($arrLoop);



?>
