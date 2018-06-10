<?php

?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(e){
	
	var html='<p><div>make:<input type="text" name="make" id="childmake" /> model:<input type="text" name="model" id="childmodel" /> serial:<input type="text" name="serial" id="childserial" /><a href="#" id="remove">X</a></div></p>';
	
	var rmax=5;
	var x=2;
	
	$("#add").click(function(e){
		
		if(x<=rmax){
			$("#container").append(html);
			x++;
		}
		else{
			alert("cannot have more than "+rmax+" rows");
		}
	});
	
	$("#container").on("click","#remove",function(e){
		$("#remove").parent('div').remove();
		x--;
	});
	
	
	
	
	
	
});
</script>
</head>

<body>
<form method="POST">
<div id="container">
make:<input type="text" name="make" id="make" />
model:<input type="text" name="model" id="model" />
serial:<input type="text" name="serial" id="serial" />
<a href="#" id="add">add more</a>
</div>
</p>
<input type="submit" name="submit" />
</form>
</body>
</html>




