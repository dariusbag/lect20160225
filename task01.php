<form action="index.php" method="POST">
	<input type="text" name="str01" autocomplete="off" value="<?php echo (isset($_POST['str01'])) ? ($_POST['str01']) : 'Ivesti zodi' ?>">
	<input type="submit" name="Submit01">
</form>

<?php
// 1. žodį atspausdintų atvirkščiai pvz: jei duotas žodis sula ekrane atspausdintų alus;


if(!isset($_POST['str01'])){
    echo 'Vieta rezultatui';
}else{
	$strToRev = $_POST['str01'];
	$reversedString = strrev($strToRev);
    echo $reversedString;
}


// echo 'Originali eilutė: '. $strToRev .'<br />';
// echo 'Apversta eilutė: '. $reversedString .'<br />';
// ?>