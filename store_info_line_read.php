<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>
	<title>Read INFO line by line</title>
	<style>
		body {background-color: #ffe;
		      color: brown;
		      margin-left: 25px;
		      }
		h2 {color: maroon;}	
	</style>
</head>
<body>

<h3>My Info - read in line by line by PHP</h3>


<?php
	
	$fp = fopen("myinfo.csv", "r");
	
	$readname = fgets($fp);	
	$readage = fgets($fp);
	$readweight = fgets($fp);
	
	fclose($fp);
	
	print "<p>\n";
	print "<p> Your name is $readname </p>\n";
	print "<p> Your age is $readage</p>\n";
	print "<p> Your weight is $readweight </p>\n";
	
	
	$nextyear = intval(trim($readage)) + 1;
	print "<p> Your age next year will be $nextyear </p>\n";
	
	$newweight = floatval(trim($readweight)) / 2.0;
	print "<p> Half your weight is $newweight </p>\n";

	
	print "</p>\n";
	
	print "YOUR data read back in - line by line!\n";
	
	


?>

</body>
</html>
