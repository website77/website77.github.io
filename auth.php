<?php

session_start();
if(isset($_POST['login'])){
	if($_POST['password']=='subham_saha'){
		$_SESSION['Authenticated']=1;
	}
	else{
		$_SESSION['Authenticated']=0;
		header('Location: index.html');
	}
	session_write_close();
	header('Location: home.php');
}

if(isset($_GET['logout'])){
	session_destroy();
	header('Location: index.html');
}

?>