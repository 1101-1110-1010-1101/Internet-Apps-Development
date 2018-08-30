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
	<th><?= $x ?></th>
	<th><?= $y ?></th>
	<th><?= $r ?></th>
	<th><?= $res ? 'inside' : 'outside' ?></th>
	<th><?= $currentTime ?></th>
	<th><?= number_format($time, 10, ".", "") ?></th>
</tr>