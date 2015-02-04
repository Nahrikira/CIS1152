<?php

/**
 * @param $temp_in_c
 */
function tempWarning($temp_in_c)
{
    // Use an if else statement

    // Output the following text if the temp_in_c is above 32 degrees centigrade.
	if ($temp_in_c > 32)
		echo "It's really hot out there, be careful!";
    // Alternately output if the temp_in_c is below 7 degrees centigrade
	else if ($temp_in_c < 7)
		echo "Brrrrr. Be sure to dress warmly.";
}

/**
 * @param $a
 * @param $b
 * @param $c
 */
function quadraticEquation($a, $b, $c)
{
    // Use and if else statement

    $discrim = $b * $b - 4 * $a * $c;

    //if the discrim is less than zero echo the following
	if ($discrim < 0)
		echo "The equation has no real roots!";
    // if the discrim equals zero do the following
	else if ($discrim == 0)
	{
		$root = -$b / (2 * a);
		echo "There is a double root at " . $root;
	}
    // if the discrim is greater than zero do the following
	else if ($discrim > 0)
	{ 
		$discRoot = sqrt($b * $b - 4 * $a * $c);
		$root1    = (-$b + $discRoot) / (2 * $a);
		$root2    = (-$b - $discRoot) / (2 * $a);
		echo "The solutions are: " . $root1 . "and " . $root2;
	}
   

}
/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author Danielle_DeLorenzo <dsd12190@vtc.vsc.edu>
 * @since 20150203
 */

/**
 * @param $letter
 */
function consinantOrVowel($letter)
{
    // Use a switch statement here
	switch ($letter)
	{
		case 'a':
		case 'e':
		case 'i':
		case 'o':
		case 'u':
			echo $letter . " is a vowel";
			break;
		case 'b':
		case 'c':
		case 'd':
		case 'f':
		case 'g':
		case 'h':
		case 'j':
		case 'k':
		case 'l':
		case 'm':
		case 'n':
		case 'p':
		case 'q':
		case 'r':
		case 's':
		case 't':
		case 'v':
		case 'w':
		case 'x':
		case 'y':
		case 'z':
			echo $letter . " is a consonant";
			break;
		default:
			echo $letter . " is not a vowel or a consonant";
	}

}

/**
 * @param $number
 */
function oddOrEven($number)
{
    // Use the modulus and ternary operator to echo whether the number is odd or even
	echo ($number%2 == 0) ? $number . " is an even number." : $number . " is an odd number.";
}

function countByThree()
{
    // Create a for loop that counts by threes to ninety-nine and outputs every increment from 3 up to and including ninety-nine
	for ($i = 0; $i <= 99; $i += 3)
	{
		echo $i . " ";
	}
}

/**
 * @param $count
 */
function indefiniteFactorialLoop($count)
{
	$factorial_product = 1;
    // write a loop that starts at 0 and calculates the factorial to and including the value of count
	while ($count > 0)
	{
		$factorial_product *= $count; 
		$count--;
	}
    echo "The factorial is " . $factorial_product;

}

// Insert function calls below.
tempWarning(40);
tempWarning(5);
quadraticEquation(2, 3, 4);
consinantOrVowel('a');
consinantOrVowel('g');
consinantOrVowel('+');
oddOrEven(5);
oddOrEven(2);
countByThree();
indefiniteFactorialLoop(6);