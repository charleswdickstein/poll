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
		for ($key = 0; $key < count($line); $key++){

		
		echo "This is the print statement".$thefile[1][$key];
		if ($thefile[1][$key] == 0){
			$clintonCount++;
		}
		else if ($thefile[1][$key] == 1){
			$trumpCount++;
		}
		else if ($thefile[1][$key] == 2){
			$sandersCount++;
		}
		else if ($thefile[1][$key] == 3){
			$cruzCount++;
		}
		
		//print trim($thefile[$line])."<br />\n";
	}
}

	// Calculate Results 
	//$totalVotes = $clintonCount.$trumpCount.$sandersCount.$cruzCount;


	echo "Votes: ";
	echo " Clinton: ".$clintonCount;
	echo " Trump: ".$trumpCount;
	echo " Sanders: ".$sandersCount;
	echo " Cruz:  ".$cruzCount;


	




	
	print "</p>\n";
	
	print "YOUR data read back in!\n";
	
	


?>

</body>
</html>
