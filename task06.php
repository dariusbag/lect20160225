<form action="index.php" method="POST">
    <textarea rows="4" cols="32" name="06inp" ><?php echo (isset($_POST['06inp']) ? ($_POST['06inp']) : ''); ?></textarea><br />
    <input type="submit" name="forSubmit06">
</form>

<?php
// 6. Surasti ilgiausią žodį duotame teksto paragrafe
include_once 'functions/functions.php';

$text = '';

if(!isset($_POST['06inp'])){
    echo 'Įvesti tekstą';
}else{
    $text = ($_POST['06inp']);
}


// $text = 'First,  think  84654265962.5156 of variables. in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc. When you create a reference, you are making a second name that points at the same data slot. When you assign one variable to another, you are copying the contents of one data slot to another data slot.';

// removing punctuation
$arrPunctFree = removePunctuation($text);

// removing dots
$dotsFree = removeDots($arrPunctFree);

// converting text to array of words
$arrText = strToArray($dotsFree);

// getting length of the longest element in array
$longest = longestLen($arrText);

// getting list of longest elements
$longestElements = getElements($arrText, $longest);

// print list of the longest words
foreach ($longestElements as $element){
    echo $element .'; ';
}

?>
