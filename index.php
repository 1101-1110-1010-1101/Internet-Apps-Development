<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Labwork #1</title>
</head>
<body>
	<header>
		<h1 id='lab_title'>Labwork#1</h1>
		<h2 id='name'>Выполнил студент группы P3202<br>Саржевский Иван Анатольевич</h2>
	</header>
	
	<form action="" method="post" name="myForm" onsubmit="return validateForm()">
		<p>x: <input type="select" name="x"/></p>
		<p>y: <input type="text" name="y"/></p>
		<p>r: <input type="select" name="r"/></p>
		<p><input type="submit"></p>
	</form>
	<?php 
	include 'check.php';
	$x = (float)$_POST['x'];
	$y = (float)$_POST['y'];
	$r = (float)$_POST['r'];
	?>
	<div id='res'>Answer: <?php var_export(check_coord($x, $y, $r)) ?></div>
</body>
</html>
<script type="text/javascript">
	function validateForm() {
    	var values = document.forms["myForm"];
    	for(var key in Object.keys(values)){
  			var value = values[key].value;
  			if (isNaN(value))
  				alert('\'' + value + '\' is not a number')
		}
		return false;
	} 
</script>
