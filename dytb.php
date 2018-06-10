<html>
<head>
</head>
<body>
<form method="POST">
<h3>Matrix A</h3>
<table>
<tr><td>enter no. of rows</td><td><input type="text" name="arows" /></td></tr>
<tr><td>enter no. of columns</td><td><input type="text" name="acols" /></td></tr>
</table>
<h3>Matrix B</h3>
<table>
<tr><td>enter no. of rows</td><td><input type="text" name="brows" /></td></tr>
<tr><td>enter no. of columns</td><td><input type="text" name="bcols" /></td></tr>
</table>
</br>
<tr><td><input type="submit" name="formmatrix" value="form matrix" /></td></tr>
</form>
</br></br>
</body>
</html>
<?php


if(isset($_POST['formmatrix'])){
	$arow=$_POST['arows'];
	$acol=$_POST['acols'];
	$brow=$_POST['brows'];
	$bcol=$_POST['bcols'];

	if((($arow!=NULL)&&($arow!=0))&&(($acol!=NULL)&&($acol!=0))&&(($brow!=NULL)&&($brow!=0))&&(($bcol!=NULL)&&($bcol!=0))){
		//echo $row." ".$col."</br>";
		echo "<form method='POST' action='result.php'>";
		echo "<table>";
		echo "<input type='hidden' name='arow' value=' ".htmlspecialchars($arow)." ' />";
		echo "<input type='hidden' name='acol' value=' ".htmlspecialchars($acol)." ' />";
		echo "<input type='hidden' name='brow' value=' ".htmlspecialchars($brow)." ' />";
		echo "<input type='hidden' name='bcol' value=' ".htmlspecialchars($bcol)." ' />";
		for($i=0;$i<$arow;$i++){
			echo "<tr>";
			for($j=0;$j<$acol;$j++){
				echo "<td>";
				echo "<input type='text' name='acells[]' />";
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</br></br>";
		echo "<table>";
		for($i=0;$i<$brow;$i++){
			echo "<tr>";
			for($j=0;$j<$bcol;$j++){
				echo "<td>";
				echo "<input type='text' name='bcells[]' />";
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "</br>";
		echo "<input type='submit' name='multiply' value='multiply' />";
		echo "</form>";
	}
	else{
		echo "<script language='javascript'>alert('the matrix cannot have zero rows or columns');</script>";
	}
	
	
} 

?>











