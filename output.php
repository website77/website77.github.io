<?php

require 'authlogin.php';

echo "<!DOCTYPE html>
		<html>
		<head>
		<script src='https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=python&amp;skin=sunburst'></script>
		<title>sentiment analysis RNN</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
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
		<p>The following is the set of inputs on which the RNN framework is tested.</br>
		input 1: Finally an ending that made me cry. </br>
		input 2: It could have been a lot better. </br>
		input 3: Nothing could be any more worse. </br>
		input 4: The best horror film till date. </br>
		</br>As you have already guessed, the output for the above set should be:</br>
		output 1: [1]</br>
		output 2: [0]</br>
		output 3: [0]</br>
		output 4: [1]</br>
		But you'll see below how the program achieves the same after 1000 training sets.</br>
		</br><i>Note: The program is tested on a part of the data, it has been trained on.</i></p>
		</div>
		
		<div style='width:100%; background:white;'>
		
		<pre class='prettyprint'>";

		include 'saoutput.txt'; 
				

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