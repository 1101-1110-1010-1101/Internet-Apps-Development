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
				$currentTime = date("H:i:s", strtotime('-1 hour'));
				include 'check.php';
				$start = microtime(true);
				$x = (float)$_POST['x'];
				$y = (float)$_POST['y'];
				$r = (float)$_POST['r'];
				$res =check_coord($x, $y, $r);
				$time = microtime(true) - $start;
			?>
			<p><input type="submit" onclick="validateForm()" class="option" value="Ok" name="button" id='ok'></p>
		</form>
		<table id='result'>
			<caption>Results</caption>
			<tr>
				<th>X</th>
				<th>Y</th>
				<th>R</th>
				<th>Result</th>
				<th>Time</th>
				<th>Script time</th>
			</tr>
			<tr>
				<th><?php echo $x ?></th>
				<th><?php echo $y ?></th>
				<th><?php echo $r ?></th>
				<th><?php echo var_export($res) ?></th>
				<th><?php echo $currentTime ?></th>
				<th><?php echo number_format($time, 10, ".", "") ?></th>
			</tr>
		</table>
	</body>
</html>
<script type="text/javascript">
	function add_result_to_table() {
		var table = document.getElementById('result');
		var row = table.insertRow(0);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		cell1.innerHTML = "NEW CELL1";
		cell2.innerHTML = "NEW CELL2";
	}
	function validateForm() {
    	var values = document.forms["myForm"];
    	for(var key in Object.keys(values)){
    		if (values[key].type != 'submit')
  				var value = values[key].value;
  				if (isNaN(value))
  					alert('\'' + value + '\' is not a number');
		}
		add_result_to_table();
		return false;
	}
</script>
