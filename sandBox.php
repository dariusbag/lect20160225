<?php
	// $txt 	= "Another reason people lie is to achieve personal power";
	
	// $txt 	= strtolower($txt);
	// $m 		= explode(" ",$txt);
    // var_dump($m);
    
	// $md 	= count($m);
    // var_dump($md);
    
	// $am		= array();
	// for($a=0;$a<$md;$a++){
		// $temp = $m[$a];
		// $templ = strlen($temp);
		// for($b=0;$b<$templ;$b++){
			// $tempc = $temp[$b];
			// $am[$tempc]++;
		// };
	// };
	// foreach($am as $key=>$value){
	// print($key.' = '.$value.' ');
	// };
    

$a=array("a"=>"red","b"=>"green");
array_push($a,"blue","yellow");
$a['c'] = 'test';
$a[] = 'TEST';
print_r($a);


?>