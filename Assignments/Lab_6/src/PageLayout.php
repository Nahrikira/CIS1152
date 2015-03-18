<?php

/**
 * Lab 6, Static Classes
 *
 * @version 1.0
 * @author Danielle DeLorenzo <dsd12190@vtc.edu>
 * @since 20150310
 */

namespace VTC\Lab_5\PageLayout; 
require_once "src/math_fun.php";

use VTC\Lab_5\MathFun as MathFun;

class PageLayout
{

    public static $header = "<html>\n\t<head>\n\t\t<title>Lab 6 Form</title>\n\t</head>\n\t<body>";
    public static $footer = "\n\t</body>\n</html>";
    public static $form_layout = <<< EOD
    <p>
    <form method="post" action="">
        <label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
        <label name="farenheit2Kelvin">Farenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
        <label name="dodecahedronVolume">Dodecahedron Side Value</label><input type="text" name="dodecahedronVolume"><br>
        <label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    </p>
EOD;
	
	public static function clicked($is_clicked, $trunc_num, $degrees_k, $volume, $velocity)
	{
		$calculator = new  MathFun\MathFun();
		if(!isset($is_clicked))
		{
			echo $form_layout;
		}
		else
		{
			$form_results = "";
			if(!empty($trunc_num))
			{
				$form_results = "Truncated Number: " . $calculator->truncateFloat($trunc_num);
			}
			if(!empty($degrees_k))
			{
				$form_results .= "<br>Temperature in Degrees Kelvin: " . $calculator->farenheit2Kelvin($degrees_k);
			}
			if(!empty($volume))
			{
				$form_results .= "<br>The Volume of Your Dodecahedron Die: " . $calculator->dodecahedronVolume($volume);
			}
			if(!empty($velocity))
			{
				$form_results .= "<br>How Fast You Will Hit the Ground: " . $calculator->impactVelocity($velocity);
			}
			echo $form_results;		
		}
	}
}