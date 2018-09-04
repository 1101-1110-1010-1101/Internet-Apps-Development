<tr>
	<th>X</th>
	<th>Y</th>
	<th>R</th>
	<th>Result</th>
	<th>Time</th>
	<th>Script time</th>
</tr>
<?php
foreach ($_SESSION['history'] as $value) { ?>
		<tr>
			<th><?php echo $value[0] ?></th>
			<th><?php echo $value[1] ?></th>
			<th><?php echo $value[2] ?></th>
			<th><?php echo $value[4] ? 'inside' : 'outside' ?></th>
			<th><?php echo $value[5] ?></th>
			<th><?php echo number_format($value[3], 10, ".", "") ?></th>
		</tr>
<?php
	}
?>