<?php
	// get the radius from the textfield
  $radius = $_POST['radius'];
  $pi = pi();

	// calculate the surface area
	$radiussquared = $radius ** 2;
  $surfacearea = $radiussquared * 4 * $pi;
  $sarounded = number_format($surfacearea, 2);

  // calculate the volune
  $volume = 4/3 * $pi * $radius ** 3;
  $volrounded = number_format($volume, 2);
?>

<h3>Results:</h3>
The surface area of the sphere is <?php echo "$sarounded"; ?>cm<sup>2</sup>.
<br>
The volume of the sphere is <?php echo "$volrounded"; ?>cm<sup>3</sup>.