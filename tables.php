<?php
$lines = file('database.txt');

$tables = '';

foreach ($lines as $k => $line) {
	$line=trim($line);
	if(!empty($line)){
		$pieces = explode("|", $line);
		
		$tables.= '<tr>';
		$tables.= '<td>';
		$tables.= $pieces[0];
		$tables.= '</td>';
		
		$tables.= '<td>';
		$tables.= $pieces[1];
		$tables.= '</td>';
		
		$tables.= '<td>';
		$tables.= $pieces[2];
		$tables.= '</td>';
		
		$tables.= '<td>';
		$tables.= $pieces[3];
		$tables.= '</td>';
		
		$tables.= '<td>';
		$tables.= $pieces[4];
		$tables.= '</td>';
		
		$tables.= '<td>';
		$tables.= '<img src="photo/'.$pieces[0].'.jpg" width= 160 high=90>';
		$tables.= '</td>';
		$tables.= '</tr>';
}
}
echo"<html>
<head>
</head>
<body>
<table border=1>
$tables
</table>
</body>
</html>"
?>

<style>
#user {
	height: 65px;
	margin-top: 60px;
	border: 3px solid #AAAAAA;
    border-radius: 32px;
	font-size: 16pt;
	padding: 10px;
}
</style>

	<a href ="test.html">
	<img src = "res/nov_zap.jpg">;
	</a>
	
	<form action="delete.php" method="POST" align="center">
		<p>udalit</p>
		<input type= "text" name= "time" id="user" size="7" placeholder="time"/><br>
		<input type="submit" id="user" value="Отправить">
	</form>