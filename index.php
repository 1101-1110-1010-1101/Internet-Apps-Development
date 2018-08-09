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
function check_coord($x, $y, $r)
{
	if ($x == 0 && $y ==0)
		return True;
	else if ($x > 0 && $y > 0){
		if (sqrt((pow($x, 2) + pow($y, 2))) <= ($r/2))
			return True;
		else return False;
	} 
	else if ($x < 0 && $y > 0){
		return False;
	} 
	else if ($x < 0 && $y < 0){
		if (-$x <= $r - 2*(-$y))
			return True;
		else return False;
	}
	else if ($x < $r && $y < $r){
		return True;
	} 
	else return False;
}
echo "answer is ";
var_export(check_coord($x, $y, $r));
echo "\n";
?>