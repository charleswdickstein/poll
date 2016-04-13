<!--  
Charles Dickstein
April 12

 This page displays the histogra. 
 it reads the csv file and displays the according data
 using css to create rectangular colored boxes -->

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

<input type="radio" name="yourinfo" value="2" onclick="location.href = 'poll.php'">Poll

<input type=submit value="Submit"/>
</form>

<?php
//$infoChoice = $_POST['yourinfo'];


$fp = fopen('myinfo.csv',"r") or die("can't open the file!");
	       
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
			// Each candidate is given a unique value 
			// A users's vote is recorded as a number
			// Clinton = 1 , Trump = 2 , 
			// Sanders = 3 , Cruz = 4,
			// Kasich = 5 

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
			
		
			
		
		}  // end ";for $m
	
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
<div id="div1">
<h1>Poll Results</h1>
<h4>Key:</h4>

<ul>

	Clinton  <?php echo $clintonPercent; ?><li style="height: 100px; width: <?php echo $clintonPercent; ?>; background-color: blue;"></li><br/>
	Trump <?php echo $trumpPercent; ?><li style="height: 100px; width: <?php echo $trumpPercent; ?>; background-color: red;"></li><br/>
	Sanders <?php echo $sandersPercent; ?><li style="height: 100px; width: <?php echo $sandersPercent; ?>; background-color: blue;"></li><br/>
	Cruz <?php echo $cruzPercent; ?><li style="height: 100px; width: <?php echo $cruzPercent; ?>; background-color: red;"></li><br/>
	Kasich <?php echo $cruzPercent; ?><li style="height: 100px; width: <?php echo $kasichPercent; ?>; background-color: red;"></li><br/>
</ul>
</div>
