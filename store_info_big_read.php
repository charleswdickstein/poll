<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>
	<title>Read All INFO</title>
	<style>
		body {background-color: #fee;
		      color: navy;
		      margin-left: 25px;
		      }
		h2 {color: maroon;}	
	</style>
</head>
<body>

<h3>My Info - read in all at once by PHP</h3>


<?php

$fp = fopen('myinfo.csv',"r") or die("can't open the file!");
while ($row= fgetcsv($fp, 1024, ",")){
	
		$columns = count($row);
		print("<tr>\n");
		for ($m=0; $m<$columns; $m++) {
			$value = floatval($row[$m]);
			
			if ($value > 200.0)
			   print("<td> N/A </td>\n");
			else
			    print("<td>".$value."</td>\n");
			
		
		}  // end for $m
		print("</tr>\n");
	
	
	} // end while $row

	print("<tr>\n");
	
	fclose($fp) or die("can't close the file");


	// $thefile = file('myinfo.txt');
	print "<p>";
	
	// for ($line=0; $line<count($thefile); $line++) {
	// 	print trim($thefile[$line])."<br />\n";
	
	
	
	print "</p>\n";
	
	print "YOUR data read back in!\n";
	
	


?>

</body>
</html>
