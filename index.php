<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Labwork #1</title>
</head>
<body>
<div id='everything'>
	<header>
		<h1 id='lab_title'>Labwork#1</h1>
		<h2 id='name'>Выполнил студент группы P3202<br>Саржевский Иван Анатольевич</h2>
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
		<p><input type="submit" onclick="validateForm()" class="option" value="Ok" name="button"></p>
		<div id='res'>Answer: <?php var_export(check_coord($x, $y, $r)) ?></div>
	</form>
	
</div>
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
