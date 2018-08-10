<?php
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
?>