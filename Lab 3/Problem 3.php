<?php
	$length = 20;
	$width = 30;
	$area = $length*$width;
	$perimeter = 2*($length+$width);
	echo "Perimeter of rectangle is $perimeter\n";
	echo "Area of rectangle is $area";
	
	if($length==$width)
		echo "Squere";
	else
		echo "Rect";
?>
