
<?php
$canditateNameValue = "";
$voteValue = $_POST['yourvote'];
$nameValue = $_POST['yourname'];


switch ($voteValue){
	case '1':
		$canditateNameValue = $_POST['yourclintonvote'];
		break;
	case '2':
		$canditateNameValue = $_POST['yourtrumpvote'];
		break;
	case '3':
		$canditateNameValue = $_POST['yoursandersvote'];
		break;
	case '4':
		$canditateNameValue = $_POST['yourcruzvote'];
		break;
	default:
		$canditateNameValue = $_POST['yourbloombergvote'];

}



$theDecision = array($canditateNameValue => $voteValue, $nameValue);
// $trump = $_POST['yourvote']."\n";
// $sanders = $_POST['yourvote']."\n";
// $cruz = $_POST['yourvote']."\n";
// $theValues = array($clinton, $trump, $sanders, $cruz);
?>

<h2>Your Complete Info:</h2>

<ul>
	<li><h3>Your vote: <?php echo $canditateNameValue; ?> </li>
<!-- 	<li><h3>Your age: <?php echo $theage; ?> </li>
	<li><h3>Your weight: <?php echo $theweight; ?> </li> -->

</ul>

<?php
	$fp = fopen('myinfo.csv',"r") or die("can't open the file!");
	
	print("<table border='1' cellspacing='2' cellpadding='2'>\n");
	//$myfile = fopen('myinfo.csv', 'a');
	$hasVoted = false;
	while (($row= fgetcsv($fp, 1024, ",") !== FALSE){
	
		$columns = count($row);
		print "<h1>".$columns."</h1>";
		print("<tr>\n");
		if ($columns > 1){
		for ($m=0; $m<$columns; $m++) {
			$value = $row[1];
			print "<p>"."This is value".$value." and this is nameValue".$nameValue."<p>"; 
			if (strcmp($value, $nameValue) == 0){
				$hasVoted = true;
			}

		}
	}
	fclose($fp);
	if ($hasVoted == false){
	$myfile = fopen('myinfo.csv', 'a');
	fputcsv($myfile, $theDecision);
	fclose($myfile);
}
}
	//fwrite($myfile, $theValues);
	// fwrite($myfile, $theage);
	// fwrite($myfile, $theweight);
	

	print "File written with this data: ";
	print $voteValue;

?>