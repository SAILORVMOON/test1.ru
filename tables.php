<?php
$lines = file('database.txt');

$tables = '';
$qwe= 0;

if(isset($_POST['kolvo'])){
	$qwe = intval($_POST['kolvo']);
}


for($i = $qwe; $i < $qwe + 10; $i++){
	$line = $lines[$i];
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

$tables.= '<tr>';
$tables.= '<td>';
$tables.= '<form action=\'tables.php\' method=\'POST\' align=\'center\'>';
$tables.= '<input type= \'text\' hidden name= \'kolvo\' value=';
$tables.= $qwe-10;
$tables.= '><br>';
$tables.= '<input type=\'submit\' value=\'Предыдущие 10\'>';
$tables.= '</form>';
$tables.= '</td>';

$tables.= '<td>';
$tables.= '</td>';

$tables.= '<td>';
$tables.= '</td>';

$tables.= '<td>';
$tables.= '</td>';

$tables.= '<td>';
$tables.= '</td>';

$tables.= '<td>';
$tables.= '<form action=\'tables.php\' method=\'POST\' align=\'center\'>';
$tables.= '<input type= \'text\' hidden name= \'kolvo\' value=';
$tables.= $qwe+10;
$tables.= '><br>';
$tables.= '<input type=\'submit\' value=\'Предыдущие 10\'>';
$tables.= '</form>';
$tables.= '</td>';
$tables.= '</tr>';
echo"<html>
<head>
</head>
<body>
<div align='center'>
<table border=1>
$tables
</table>
</div>
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
input.radiustop {
				width: 300px;
				height: 50px;
				margin-top: 0px;
				border: 3px solid #AAAAAA;
				font-size: 16pt;
				padding: 10px;
				border-top-right-radius: 32px;
				border-top-left-radius: 32px;
			}
			input.radiusbottom {
				width: 300px;
				height: 50px;
				margin-top: 0px;
				border: 3px solid #AAAAAA;
				font-size: 16pt;
				padding: 10px;
				border-bottom-right-radius: 32px;
				border-bottom-left-radius: 32px;
			}
</style>

<table>
	<tr>
		<td></td>
		<td></td>
	</tr>
</table>
<a href ='test.html'>
	<img src = 'res/nov_zap.jpg'>
	</a>
	
	<form action='delete.php' method='POST' align='center'>
		<p>udalit</p>
		<input type= 'text' name= 'time' class='radiustop' placeholder='time'/><br>
		<input type='submit' class='radiusbottom' value='Отправить'>
	</form>