<?php

require_once "src/PageLayout.php";

use VTC\Lab_5\MathFun as MathFun;
use VTC\Lab_5\PageLayout as PageLayout;

echo PageLayout\PageLayout::$header;

if (!isset($_POST['submit']))
{
	echo PageLayout\PageLayout::$form_layout;
}
else
{
	PageLayout\PageLayout::clicked($_POST['submit'], $_POST['truncateFloat'], $_POST['farenheit2Kelvin'], $_POST['dodecahedronVolume'], $_POST['impactVelocity']);	
}

echo PageLayout\PageLayout::$footer;