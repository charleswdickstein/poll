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
	$clintonCount = 0;
	$trumpCount = 0;
	$sandersCount = 0;
	$cruzCount = 0;
	$bloombergCount = 0;
	print "<p>";
	
	for ($line=0; $line<count($thefile); $line++) {
		if ($thefile[$line] == 0){
			echo $thefile[$line];
			$clintonCount++;
		}
		else if ($thefile[$line] == 1){
			$trumpCount++;
		}
		else if ($thefile[$line] == 2){
			$sandersCount++;
		}
		else if ($thefile[$line] == 3){
			$cruzCount++;
		}
		else{
			$bloombergCount++;
		}
		print trim($thefile[$line])."<br />\n";
	}
	echo "Votes: ";
	echo "Clinton: ".$clintonCount."\n";
	echo "Trump: ".$trumpCount."\n";
	echo "Sanders: ".$sandersCount."\n";
	echo "Cruz:  ".$cruzCount."\n";


	
	
	print "</p>\n";
	
	print "YOUR data read back in!\n";
	
	


?>

</body>
</html>
