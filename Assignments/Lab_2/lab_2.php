<?php

/**
 * Lab 2, Arithmetic Lab
 *
 * This lab focuses on your understanding of arithmetic.
 *
 * @version 1.0
 * @author Danielle_DeLorenzo <dsd12190@vtc.edu>
 * @since 20150120
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

function truncateFloat($float_value)
{
	$trunc_num = (int)($float_value * 100) / 100;
	
	echo $trunc_num;
}

/**
 * Outputs to the console the temperature in Kelvin.
 *
 * Takes in the temperature in degrees Fahrenheit and converts it to degrees Kelvin.
 * Then returns the output to the console.
 * 
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
	$degrees_k = ($degrees_f - 32) * (5/9) + 273.15;
	
	echo $degrees_k;
}

/**
 * Outputs to the console the volume of a dodecahedron.
 *
 * Takes in the length of one edge of a dodecahedron and calculates the volume of the dodecahedron.
 * Then returns the output to the console.
 *
 * @param $area
 */
function dodecahedronVolume($area)
{
	$volume = ((15 + 7 * sqrt(5)) / 4) * pow($area, 3);
	
	echo $volume;
}

/**
 * Outputs to the console the impact velocity of a falling object.
 *
 * Takes in the height an object starts falling and calculates the velocity it will have when it hits the ground.
 * Then returns the output to the console.
 *
 * @param $height
 */
function impactVelocity($height)
{
	$velocity = sqrt((2 * GRAVITY * $height));
	
	echo $velocity;
}

truncateFloat(34.14567);
farenheit2Kelvin(80);
dodecahedronVolume(1);
impactVelocity(55);
