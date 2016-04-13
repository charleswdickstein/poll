<?php
//$infoChoice = $_POST['yourinfo'];


$fp = fopen('myinfo.csv',"r") or die("can't open the file!");
	
	print("<table  id='div2' border='1' cellspacing='2' cellpadding='2'>\n");
	
	//print("<tr><td>Year</td><td>Jan</td><td>Feb</td><td>Mar</td><td>Apr</td><td>May</td><td>Jun</td>".
	     //  "<td>Jul</td><td>Aug</td><td>Sep</td><td>Oct</td><td>Nov</td><td>Dec</td></tr>\n");
	       
	$clintonCount = 0;
	$trumpCount = 0;
	$sandersCount = 0;
	$cruzCount = 0;
	$kasichCount = 0;

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
				case 5:
					$kasichCount++;
					break;
				default:
					//do nothing
			}
			// if ($infoChoice == 1){
			print("<td>".$value."</td>\n");
		//}
		
			
		
		}  // end ";for $m
	echo "<h1>Voting Key:</h1>";
	echo "<ul>";
	echo "<li>Hilary Clinton : 1</li>";
	echo "<li>Donald Trump : 2</li>";
	echo "<li>Bernie Saners : 3</li>";
	echo "<li>Ted Cruz : 4</li>";
	echo "<li>John Kasich : 5</li>";
	echo "</ul>";
		print("</tr>\n");
		}
	
	
	 // end while $row

	print("<tr>\n");
	print("</table>");
	
	fclose($fp) or die("can't close the file");

	$totalVotes = $clintonCount + $trumpCount + $sandersCount + $cruzCount;
	if ($totalVotes > 0){
	$clintonPercent = number_format((($clintonCount/$totalVotes)*100))."%";
	$trumpPercent = number_format((($trumpCount/$totalVotes)*100))."%";
	$sandersPercent = number_format((($sandersCount/$totalVotes)*100))."%";
	$cruzPercent = number_format((($cruzCount/$totalVotes)*100))."%";
	$kasichPercent = number_format((($kasichCount/$totalVotes)*100))."%";
}

	


?>