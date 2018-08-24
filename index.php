<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>Labwork #1</title>
	</head>
	<body>
		<header>
			<h1>Labwork#1<sub>18215</sub></h1>
			<h2>Выполнил студент группы P3202<br>Саржевский Иван Анатольевич</h2>
		</header>
		<img src="res/variant.png" alt='Variant' id='image'>
		<form id='mainForm' action="" method="post" name="myForm">
			x:
			<select name='x' class="option">
				<option>-3</option>
				<option>-2</option>
				<option>-1</option>
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
			y: <input type="text" name="y" value="0" class="option" id="y"/>
			r:
			<select name='r' class="option">
				<option>1</option>
				<option>1.5</option>
				<option>2</option>
				<option>2.5</option>
				<option>3</option>
			</select>
			<?php 
				include 'check.php';
				$x = (float)$_POST['x'];
				$y = (float)$_POST['y'];
				$r = (float)$_POST['r'];
			?>
			<p><input type="submit" onclick="validateForm()" class="option" value="Ok" name="button" id='ok'></p>
			<div id='res'>Answer: <?php var_export(check_coord($x, $y, $r)) ?></div>
		</form>
	</body>
</html>
<script type="text/javascript">
	function validateForm() {
    	var values = document.forms["myForm"];
    	for(var key in Object.keys(values)){
    		if (values[key].type != 'submit')
  				var value = values[key].value;
  				if (isNaN(value))
  					alert('\'' + value + '\' is not a number');
		}
		return false;
	} 
</script>
