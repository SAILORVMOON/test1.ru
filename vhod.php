<?php
	$lines = file('check.txt');
	foreach ($lines as $k => $line){
		$pieces = explode("|", $line);
		if(($pieces[$k * 2] == $_POST['login']) && ($pieces[$k * 2 + 1] == $_POST['password'])){
			header("Location:test.html");
			exit();
		}else{
			header("Location:vhod.html");
			exit();
		}
	}
?>