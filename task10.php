<?php
$str10 = 'First,  think of variables. in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc.';

?>
<form action="index.php" method="POST">
	<textarea rows="6" cols="64" name="10text" ><?php echo (isset($_POST['10text']) ? ($_POST['10text']) : $str10); ?></textarea>
    <input type="submit" name="Submit09">
</form>
<?php
// 10. Suskaičiuotų ir atspausdintų kiekvieno simbolio kiekį duotoje eilutėje.
include_once 'functions/functions.php';

if (!isset($_POST['10text'])){
	echo 'Pateikti duomenis';
}else{$text = ($_POST['10text']);
	// converting string to lowercase
	$str10lowCase = letterCases($text)[0];

	// splitting string to array of characters
	$arrStr10 = str_split($str10lowCase);

	// counting each character in array
	$test = symbolCount($arrStr10);

	foreach($test as $key => $value){
		echo $key .' - '. $value .'; ';
	}
}



?>
