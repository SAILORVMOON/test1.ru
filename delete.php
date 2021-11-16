<?php
	$file=file("database.txt"); 

	foreach ($file as $k => $line) {
		$pieces = explode("|", $line);
		if($pieces['0'] == trim($_POST["time"])){
			unset($file[$k]); 
		}
	}

	$fp=fopen("database.txt","w"); 
	fputs($fp,implode("",$file)); 
	fclose($fp);
	header("Location:tables.php");
	exit();
?>
