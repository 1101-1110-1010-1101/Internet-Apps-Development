<?php
	$currentTime = date("H:i:s", strtotime('-1 hour'));
	include 'check.php';
	$start = microtime(true);
	$x = (float)$_POST['x'];
	$y = (float)$_POST['y'];
	$r = (float)$_POST['r'];
	$res = check_coord($x, $y, $r);
	$time = microtime(true) - $start;
?>
<tr>
	<th><?php echo $x ?></th>
	<th><?php echo $y ?></th>
	<th><?php echo $r ?></th>
	<th><?php echo $res ? 'inside' : 'outside' ?></th>
	<th><?php echo $currentTime ?></th>
	<th><?php echo number_format($time, 10, ".", "") ?></th>
</tr>