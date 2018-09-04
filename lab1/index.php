<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/res/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Labwork #1</title>
	<script type="text/javascript" src="app.js"></script>
</head>
<body>
	<div id='overlay'>
		<h1>Wrong...</h1>
	</div>
	<header id='lab_info' class="block">
		<h1>Labwork#1<sub>18215</sub></h1>
		<h2>Выполнил студент группы P3202<br>Саржевский Иван Анатольевич</h2>
	</header>
	<div id='content'>
		<div id='formBox' class="block">
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
				<p><input type="submit" class="option" value="Ok" name="button" id='ok'></p>
			</form>
			<table id='res'>
				<?php
					session_start();
					if (!isset($_SESSION['history'])) {
						$_SESSION['history'] = array();
					}
					include 'result_table.php';
				?>
			</table>
		</div>
		<img src="res/variant.png" alt='Variant' id='image' class="block">
	</div>
</body>
<div id='copyright'>&copy; spirit_blood</div>
</html>
