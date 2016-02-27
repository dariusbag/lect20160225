<?php
include_once 'functions/functions.php';
$punct = array('.', ',', ':', ';', '?', '!');
$text = 'First, think of variables in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc. When you create a reference, you are making a second name that points at the same data slot. When you assign one variable to another, you are copying the contents of one data slot to another data slot.';

$arPunctFree = str_replace($punct, '', $text);

$arrText = explode(' ', $arPunctFree);

var_dump($arrText);


?>
