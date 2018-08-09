<title>Labwork #1</title>

<form action="" method="post">
	<p>x: <input type="select" name="x"/></p>
	<p>y: <input type="text" name="y"/></p>
	<p>r: <input type="select" name="r"/></p>
	<p><input type="submit"></p>
</form>
<?php
$x = (float)$_POST['x'];
$y = (float)$_POST['y'];
$r = (float)$_POST['r'];
$answer = False;
function check_coord($x, $y, $r)
{
	$answer = False;
	if ($x > 0 && $y > 0){
		if (($x^2 + $y^2) < ($r/2))
			$answer = True;
		else $answer = False;
		return $answer;
	}
	else if ($x < 0 && $y > 0){
		$answer = False;
		return $answer;
	}
	else if ($x < 0 && $y < 0){
		if ($x < ($y/2))
			$answer = True;
		return $answer;
	}
	else if ($x < $r && $y < $r){
		$answer = True;
		return $answer;
	}
}
echo "answer is ";
var_export(check_coord($x, $y, $r));
echo "\n";
?>