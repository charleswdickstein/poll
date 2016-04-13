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

		/*#poll ul li{
			height: 100px;
			width: 100px;
			background-color: blue;
		}*/

	</style>
</head>
<body>

<h3>Results</h3>

<form action="https://aqueous-tundra-58634.herokuapp.com/store_info_big_read.php"
       method="post" onSubmit="return checkform()">
<input type="radio" name="yourinfo" value="1" onclick="location.href = 'emailList.php'">Poll
<!-- <input type="radio" name="yourinfo" value="2">Poll -->
<!-- <input type="radio" name="yourinfo" value="2" onclick="show2()">Poll -->
<input type="radio" name="yourinfo" value="1" onclick="location.href = 'poll.php'">Poll

<input type=submit value="Submit"/>

<script type="text/javascript">
	function show1(){
  document.getElementById('div1').style.display ='none';
  document.getElementById('div2').style.display ='block';
}

function show2(){
  document.getElementById('div1').style.display = 'block';
  document.getElementById('div2').style.display ='none';
}
</script>







<?php
//$infoChoice = $_POST['yourinfo'];


// $fp = fopen('myinfo.csv',"r") or die("can't open the file!");
	
// 	print("<table  id='div2' border='1' cellspacing='2' cellpadding='2'>\n");
	
// 	//print("<tr><td>Year</td><td>Jan</td><td>Feb</td><td>Mar</td><td>Apr</td><td>May</td><td>Jun</td>".
// 	     //  "<td>Jul</td><td>Aug</td><td>Sep</td><td>Oct</td><td>Nov</td><td>Dec</td></tr>\n");
	       
// 	$clintonCount = 0;
// 	$trumpCount = 0;
// 	$sandersCount = 0;
// 	$cruzCount = 0;
// 	$kasichCount = 0;

// 	while ($row= fgetcsv($fp, 1024, ",")){
	
// 		$columns = count($row);
// 		print("<tr>\n");
// 		for ($m=0; $m<$columns; $m++) {
// 			$value = $row[$m];
			
// 			switch ($value){
// 				case 1:
// 					$clintonCount++;
// 					break;

// 				case 2:
// 					$trumpCount++;
// 					break;

// 				case 3:
// 					$sandersCount++;
// 					break;

// 				case 4:
// 					$cruzCount++;
// 					break;
// 				case 5:
// 					$kasichCount++;
// 					break;
// 				default:
// 					//do nothing
// 			}
// 			// if ($infoChoice == 1){
// 			print("<td>".$value."</td>\n");
// 		//}
		
			
		
// 		}  // end ";for $m
// 	echo "<h1>Voting Key:</h1>";
// 	echo "<ul>";
// 	echo "<li>Hilary Clinton : 1</li>";
// 	echo "<li>Donald Trump : 2</li>";
// 	echo "<li>Bernie Saners : 3</li>";
// 	echo "<li>Ted Cruz : 4</li>";
// 	echo "<li>John Kasich : 5</li>";
// 	echo "</ul>";
// 		print("</tr>\n");
// 		}
	
	
// 	 // end while $row

// 	print("<tr>\n");
// 	print("</table>");
	
// 	fclose($fp) or die("can't close the file");

// 	$totalVotes = $clintonCount + $trumpCount + $sandersCount + $cruzCount;
// 	if ($totalVotes > 0){
// 	$clintonPercent = number_format((($clintonCount/$totalVotes)*100))."%";
// 	$trumpPercent = number_format((($trumpCount/$totalVotes)*100))."%";
// 	$sandersPercent = number_format((($sandersCount/$totalVotes)*100))."%";
// 	$cruzPercent = number_format((($cruzCount/$totalVotes)*100))."%";
// 	$kasichPercent = number_format((($kasichCount/$totalVotes)*100))."%";
// }

	


?>
<!-- <div id="div1">
<h1>Poll Results</h1>
<h4>Key:</h4>

<ul>

	Clinton  <?php echo $clintonPercent; ?><li style="height: 100px; width: <?php echo $clintonPercent; ?>; background-color: blue;"></li><br/>
	Trump <?php echo $trumpPercent; ?><li style="height: 100px; width: <?php echo $trumpPercent; ?>; background-color: red;"></li><br/>
	Sanders <?php echo $sandersPercent; ?><li style="height: 100px; width: <?php echo $sandersPercent; ?>; background-color: blue;"></li><br/>
	Cruz <?php echo $cruzPercent; ?><li style="height: 100px; width: <?php echo $cruzPercent; ?>; background-color: red;"></li><br/>
	Kasich <?php echo $cruzPercent; ?><li style="height: 100px; width: <?php echo $kasichPercent; ?>; background-color: red;"></li><br/>
</ul>
</div> -->






</body>
</html>
