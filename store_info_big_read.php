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
	
	print("<table border='1' cellspacing='2' cellpadding='2'>\n");
	
	//print("<tr><td>Year</td><td>Jan</td><td>Feb</td><td>Mar</td><td>Apr</td><td>May</td><td>Jun</td>".
	     //  "<td>Jul</td><td>Aug</td><td>Sep</td><td>Oct</td><td>Nov</td><td>Dec</td></tr>\n");
	       
	$clintonCount = 0;
	$trumpCount = 0;
	$sandersCount = 0;
	$cruzCount = 0;

	while ($row= fgetcsv($fp, 1024, ",")){
	
		$columns = count($row);
		print("<tr>\n");
		for ($m=0; $m<$columns; $m++) {
			$value = $row[$m];
			
			switch ($value){
				case 1:
					$clintonCount++;
					break;

				case 2:
					$trumpCount++;
					break;

				case 3:
					$sandersCount++;
					break;

				case 4:
					$cruzCount++;
					break;
			}
			print("<td>".$value."</td>\n");
			
		
		}  // end for $m
		print("</tr>\n");
	
	
	} // end while $row

	print("<tr>\n");
	
	fclose($fp) or die("can't close the file");

	$totalVotes = $clintonCount + $trumpCount + $sandersCount + $cruzCount;
	$clintonPercent = $clintonCount/$totalVotes;
	$trumpPercent = $trumpCount/$totalVotes;
	$sandersCount = $sandersCount/$totalVotes;
	$cruzCount = $cruzCount/$totalVotes;



	echo "Votes: ".$totalVotes;
	echo " Clinton: ".$clintonCount;
	echo " Trump: ".$trumpCount;
	echo " Sanders: ".$sandersCount;
	echo " Cruz:  ".$cruzCount;


?>
<ul>
	Clinton<li style="height: 100px; width: <?php echo $clintonPercent; ?>; background-color: blue;"></li>
</ul>

<!-- // 	$thefile = file('myinfo.csv');
// 	$clintonCount = 0;
// 	$trumpCount = 0;
// 	$sandersCount = 0;
// 	$cruzCount = 0;
// 	$bloombergCount = 0;
// 	print "<p>";
	
// 	for ($line=0; $line<count($thefile); $line++) {
// 		for ($key = 0; $key < count($thefile); $key++){
// 			echo $thefile[$line];
		
// 		//echo "This is the print statement".$thefile[$line];
// 		// if ($thefile[$line][0] == 1){
// 		// 	$clintonCount++;
// 		// }
// 		// else if ($thefile[$line][0] == 2){
// 		// 	$trumpCount++;
// 		// }
// 		// else if ($thefile[$line][0] == 3){
// 		// 	$sandersCount++;
// 		// }
// 		// else if ($thefile[$line][0] == 4){
// 		// 	$cruzCount++;
// 		// }
		
// 		//print trim($thefile[$line])."<br />\n";
// 	 }
// }


// 	// Calculate Results 
// 	$totalVotes = $clintonCount + $trumpCount + $sandersCount + $cruzCount;


// 	echo "Votes: ".$totalVotes;
// 	echo " Clinton: ".$clintonCount;
// 	echo " Trump: ".$trumpCount;
// 	echo " Sanders: ".$sandersCount;
// 	echo " Cruz:  ".$cruzCount;


	




	
// 	print "</p>\n";
	
// 	print "YOUR data read back in!\n";
	 -->
	




</body>
</html>
