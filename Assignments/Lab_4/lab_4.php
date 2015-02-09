<?php

/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author Danielle_DeLorenzo <dsd12190@vtc.vsc.edu>
 * @since 20150209
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define('GRAVITY', 9.8);
$float_value = 0;
$degrees_f = 0;
$area = 0;
$height = 0;

function truncateFloat($float_value)
{
	$trunc_num = (int)($float_value * 100) / 100;
	return $trunc_num;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	$degrees_k = ($degrees_f - 32) * (5/9) + 273.15;
	return $degrees_k;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
	$volume = ((15 + 7 * sqrt(5)) / 4) * pow($area, 3);
	return $volume;
}

/**
 * @param $height
 */
function impactVelocity($height)
{
	$velocity = sqrt((2 * GRAVITY * $height));
	return $velocity;
}

if (isset($_POST['submit'])) 
{ 
	$trunc_num = truncateFloat($_POST['float_value']); 
	$degrees_k = farenheit2Kelvin($_POST['degrees_f']);
	$volume = dodecahedronVolume($_POST['area']);
	$velocity = impactVelocity($_POST['height']);
} 
else 
{ 
	$trunc_num = 0;
	$degrees_k = 0;
	$volume = 0;
	$velocity = 0;
	
}
$form_layout = <<< EOD
<p>
<form method="post" action="">
Floating point number to be truncated: <input type="text" name="float_value">
<br>Temperature in degrees Fahrenheit: <input type="text" name="degrees_f">
<br>Legth of one side of you die: <input type="text" name="area">
<br>Height you fell from: <input type="text" name="height">
<br><input type="submit" value="Calculate" name="submit">
</form>
</p>
EOD;

$form_results = "<p> \nTruncated Number: " . $trunc_num . "<br> \nTemperature in Degrees Kelvin: " . 
$degrees_k . "<br> \nThe Volume of Your Dodecahedron Die: " . $volume . 
"<br> \nHow Fast You Will Hit the Ground: " . $velocity . "<br>\n</p>\n";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>
<?php
	if (!isset($_POST['submit'])) 
	{ 
		echo $form_layout;
	} 
	else 
	{
		echo $form_results;
	}
?>
</body>
</html>
