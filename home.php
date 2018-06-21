<?php

require 'authlogin.php';

		echo "<!DOCTYPE html>
		<html>
		<head>
		<script src='https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=python&amp;skin=sunburst'></script>
		<title>sentiment analysis RNN</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<style>
		
		@media all and (orientation:landscape){
		#pre{
			white-space: pre-wrap;
			word-wrap: break-word;
			text-align: left;
			
		}
		}
		
		</style>
		</head>
		<body style='margin:0;'>
		<div style='width:100%; height:140px; background-color:#00004d; color:white; padding:15px;'>
			<h1>RNN for sentiment analysis</h1>
			<nav>
				<ul style='margin:0; padding:0;'>
				<li style='list-style:none; display:inline; float:left;'><a href='home.php' style='text-decoration:none; display:block; padding: 0px 15px; color:white;'>Code</a></li>
				<li style='list-style:none; display:inline; float:left;'><a href='output.php' style='text-decoration:none; display:block; padding: 0px 15px; color:white;'>Output</a></li>
				<li style='list-style:none; display:inline; float:left;'><a href='auth.php?logout' style='text-decoration:none; display:block; padding: 0px 15px; color:white;'>Logout</a></li>
				</ul>
			</nav>
		</div>
		<div style='padding:10px; background:#ccccff;'>
		<p>The following is a python code for a basic Recurrent Neural Network that does <b>sentiment analysis</b> on a pre-defined data set
		of movie reviews. The positive sets have been assigned a value of 1 and the negative sets 0, after which it is trained and tested,
		and the same is repeated for a 1000 times. With each test the program outputs its predictions giving a measure of its accuracy, 
		which gets better with every iteration.</br></br>
		<i>Note: This page is best viewed in a desktop, but if you are using a mobile device it is recommended that you view it in landscape.</i></p>
		</div>
		
		<div style='width:100%; background:white;'>		
		<pre class='prettyprint' id='pre'>";
			
		include 'code.txt'; 
			
		echo "</pre>
		
		</div>
		<div style='width:100%; background-color:grey; color:black; padding:15px; clear:both;'>
		<p>For further queries contact<br>
		7044015977  |  subham99saha@gmail.com</p>
		<p>check my other website on neural networks<br>
		<a href='http://onlineml.000webhostapp.com'>onlineml.000webhostapp.com</a></p>
		<h4>&copy subham saha 2018</h4>
		</body>
		</html>
		</div>";

?>
