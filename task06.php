<?php 
$str = 'First,  think of variables. in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc.';
?>
<form action="index.php" method="POST">
    <textarea rows="6" cols="64" name="06inp" ><?php echo (isset($_POST['06inp']) ? ($_POST['06inp']) : $str); ?></textarea>
    <input type="submit" name="Submit06">
</form>

<?php
// 6. Surasti ilgiausią žodį duotame teksto paragrafe
include_once 'functions/functions.php';

// $text = '';

if(!isset($_POST['06inp'])){
    echo 'Įvesti tekstą';
}else{
    $string = ($_POST['06inp']);
	// removing punctuation
	$arrPunctFree = removePunctuation($string);

	// removing dots
	$dotsFree = removeDots($arrPunctFree);

	// converting text to array of words
	$arrText = strToArray($dotsFree);

	// getting length of the longest element in array
	$longest = longestLen($arrText);

	// getting list of longest elements
	$longestElements = getElements($arrText, $longest);

	// print list of the longest words
	echo 'Ilgiausi(as) žodžiai(is): ';
	foreach ($longestElements as $element){
		echo $element .'; ';
	}
}

?>
