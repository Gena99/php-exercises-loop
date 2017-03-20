<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test PHP</title>
</head>
<body>
	<h1>LOOP</h1>
	<h2>Exo n°2</h2>
	<?php 
	$premiereVariable = 0;
	$deuxiemeVariable = 9;
	while ($premiereVariable<20){
		$resultat = $premiereVariable * $deuxiemeVariable;
		echo $resultat . '<br/>';
		$premiereVariable++;
	}


	?>

</body>
</html>