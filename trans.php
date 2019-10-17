<?php
$trans=array(
				array(1,2,9),
				array(2,3,5),
				array(3,6,9)
	);
	echo "<h2> Matrix </h2>";
	for($row=0;$row<3;$row++){
		echo"<br>";
		for($col=0;$col<3;$col++)
		{
			echo" ".$trans[$row][$col];
		}
	}
	echo "<h2> transpose of a matrix</h2>";
	for($row=0;$row<3;$row++){
		echo"<br>";
		for($col=0;$col<3;$col++)
		{
			echo" ".$trans[$col][$row];
		}
	}
	?>
