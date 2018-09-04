<?php
	session_start();
	$currentTime = date("H:i:s", strtotime('-1 hour'));
	include 'check.php';
	$start = microtime(true);
	$x = (float)$_POST['x'];
	$y = (float)str_replace(',', '.', $_POST['y']);
	$r = (float)$_POST['r'];
	if (!in_array($x, array(-3, -2, -1, 0, 1, 2, 3, 4, 5)) || !is_numeric($y) || $y < -3 || $y > 3 || !in_array($r, array(1, 1.5, 2, 2.5, 3))) {
		header("HTTP/1.1 422 Unprocessable Entity");
		exit;
	}
	$res = check_coord($x, $y, $r);
	$time = microtime(true) - $start;
	$full_data = array($x, $y, $r, $time, $res, $currentTime);
	if (!isset($_SESSION['history'])) {
		$_SESSION['history'] = array();
	}
	array_push($_SESSION['history'], $full_data);
	include 'result_table.php';
?>