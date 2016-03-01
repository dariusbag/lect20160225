<?php 
$char09 = 'A';
$str09 = 'First,  think of variables. in PHP as data slots. Each one is a name that points to a data slot that can hold a value that is one of the basic data types: a number, a string, a boolean, etc.';
?>
<form action="index.php" method="POST">
	<input type="text" name="09char" autocomplete="off" value="<?php echo (isset($_POST['09char']) ? ($_POST['09char']) : $char09)?>">
    <textarea rows="6" cols="64" name="09text" ><?php echo (isset($_POST['09text']) ? ($_POST['09text']) : $str09); ?></textarea>
    <input type="submit" name="Submit09">
</form>

<?php
// 9. Iš teksto eilutės pašalintų žodžius kurie prasideda raide A.
include_once 'functions/functions.php';

if (!isset($_POST['09char']) || !isset($_POST['09text'])){
	echo 'Pateikti duomenis';
}else{
	$char = ($_POST['09char']);
	$str = ($_POST['09text']);
	// echo $str,  $char;
	echo removeWords($str, $char);
}


?>
