<html>
<head>
</head>
<body>
<?php

$amat=$_POST['acells'];
$bmat=$_POST['bcells'];
$arow=$_POST['arow'];
$acol=$_POST['acol'];
$brow=$_POST['brow'];
$bcol=$_POST['bcol'];
//$count = count($amat);
//echo $arow;
	
if(isset($_POST['multiply'])){
	echo "ha ha ha</br>";
	echo "<table>";
	$k=0;
	for($i=0;$i<$arow;$i++){
		echo "<tr>";
		for($j=0;$j<$acol;$j++){
			//printf("hahas %s",$aj);
			//echo $aj." ";
			echo "<td>".$amat[$k]."</td>";
			$k++;
		}
		//echo '</br>';
		echo "</tr>";
	}
	echo "</table>";
	
}


?>
</body>
</html>