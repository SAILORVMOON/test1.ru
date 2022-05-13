<?php
	if(!is_dir("photo")){
		mkdir("photo");
	}
	
	$atime = time();
	$adata=$atime.'|'.$_POST['name'].'|'.$_POST['sname'].'|'.$_POST['lname'].'|'. $_POST["age"]."\n";

	if(!(empty(trim($_POST['name'])) || empty(trim($_POST['sname'])) || empty(trim($_POST['age'])) || empty(trim($_FILES["photo"]['tmp_name'])))){
		$dats = fopen("database.txt","a");
		fwrite($dats, $adata);
		fclose($dats);
		move_uploaded_file($_FILES['photo']['tmp_name'], "photo/$atime.jpg");
	}
	
	header("Location:test.html?1");
	exit();
?>