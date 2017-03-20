<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test PHP</title>
</head>
<body>
	<h1>LOOP</h1>
	<h2>Exo n°4</h2>
	<?php
	$i = 1;
	while($i<10){
		echo $i . '<br/>';
		$i = $i/2 +$i;
	}
	?>
</body>
</html>