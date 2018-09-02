<?php
function check_coord($x, $y, $r)
{
	if (
		($x >= 0 && $y >= 0 && sqrt((pow($x, 2) + pow($y, 2))) <= ($r/2)) ||
		($x > 0 && $y < 0 && $x <= $r && -$y <=$r) ||
		($x <= 0 && $y <= 0 && -$x <= $r - 2*(-$y))) { return True; }
	else { return False; }
}
?>