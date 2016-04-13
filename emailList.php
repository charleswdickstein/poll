
<STYLE TYPE="text/css" MEDIA="screen, projection">

 
  @import url(index.css);
 
</STYLE>
<header>
<ul>
	<li><a href="index.php">Home</li>
	<li><a href="emailorpoll.php">Results</a></li>
	<li><a href="myinfo.csv">Download Text File</a></li>
</ul>
</header>

<form action="https://aqueous-tundra-58634.herokuapp.com/emailorpoll.php"
       method="post" onSubmit="return checkform()">
<input type="radio" name="yourinfo" value="1" onclick="location.href = 'emailList.php'">Email List

<input type="radio" name="yourinfo" value="2" onclick="location.href = 'poll.php'">Histogram

<input type=submit value="Submit"/>
</form>
<h3>Voting Key:</h3>
	<ul>
	<li>Hilary Clinton : 1</li>
	<li>Donald Trump : 2</li>
	<li>Bernie Saners : 3</li>
	<li>Ted Cruz : 4</li>
	<li>John Kasich : 5</li>
	</ul>
<?php
//$infoChoice = $_POST['yourinfo'];


$fp = fopen('myinfo.csv',"r") or die("can't open the file!");
	
	print("<table  id='div2' border='1' cellspacing='2' cellpadding='2'>\n");
	
	
	       
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