<?php
	$height = 20;
	$weight = 30;
	$area = $height*$weight;
	$perimeter = 2*($height+$weight);
	echo "Perimeter of rectangle is $perimeter\n";
	echo "Area of rectangle is $area";
	
	if($height==$weight)
		echo "Squere";
	else
		echo "Rect";
?>
