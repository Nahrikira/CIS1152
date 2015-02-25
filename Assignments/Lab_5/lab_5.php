<?php

/**
 * Lab 5
 *
 * @version 1.0
 * @author Danielle_DeLorenzo <dsd12190@vtc.vsc.edu>
 * @since 20150224
 */

/**
 * @param $float_value
 */

define('GRAVITY', 9.8);

function truncateFloat($float_value)
{
	return(int)($float_value * 100) / 100;
}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	return ((degrees_f - 32) * 5 / 9 + 273.15);
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
	return((15 + 7 * sqrt(5)) / 4) * pow($area, 3);
}

/**
 * @param $height
 */
function impactVelocity($height)
{
	return(sqrt((2 * GRAVITY * $height)));
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
	$trunc_num = "";
	$degrees_k = "";
	$volume = "";
	$velocity = "";
}

$header = <<<EOD
<html>
<head>
<title>Class 5 Lab</title>
</head>
<body>
EOD;

$footer = <<<EOD
</body>
</html>
EOD;

$form_layout = <<< EOD
<p>
<form method="post" action="">
Floating point number to be truncated: <input type="text" name="float_value">
<br>Temperature in degrees Fahrenheit: <input type="text" name="degrees_f">
<br>Length of one side of your die: <input type="text" name="area">
<br>Height you fell from: <input type="text" name="height">
<br><input type="submit" value="Calculate" name="submit">
</form>
</p>
EOD;

	if (!isset($_POST['submit'])) 
	{ 
		echo $form_layout;
	} 
	else 
	{
		$form_results = $header;
		if(!empty($trunc_num))
		{
			$form_results .= "Truncated Number: " . $trunc_num;
		}
		if(!empty($degrees_k))
		{
			$form_results .= "<br>Temperature in Degrees Kelvin: " . $degrees_k;
		}
		if(!empty($volume))
		{
			$form_results .= "<br>The Volume of Your Dodecahedron Die: " . $volume;
		}
		if(!empty($velocity))
		{
			$form_results .= "<br>How Fast You Will Hit the Ground: " . $velocity;
		}
		$form_results .= $footer;
		
		echo $form_results;
	}
?>
