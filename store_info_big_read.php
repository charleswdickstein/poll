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
	$thefile = file('myinfo.csv');
	print "<p>";
	
	for ($line=0; $line<count($thefile); $line++) {
		print trim($thefile[$line])."<br />\n";
	}
	
	
	print "</p>\n";
	
	print "YOUR data read back in!\n";
	
	


?>

</body>
</html>
