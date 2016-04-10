<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>

<title>Recording your info to the disk file!</title>
</head>
<body bgcolor=LavenderBlush>

<ul>
	<li><a href="store_info_big_read.php">Big Read</a></li>
	<li><a href="store_info_line_read.php">Line Read</a></li>
	<li><a href="myinfo.csv">Text File</a></li>
</ul>
	<h1>Form to save your name, age, and weight </h2>

<form action="https://aqueous-tundra-58634.herokuapp.com"
       method="post" onSubmit="return checkform()">
<input type="radio" name="yourvote" value="1" checked>Hilary Clinton<br>
<input type="hidden" name="yourclintonvote" value="Hilary Clinton">

<input type="radio" name="yourvote" value="2">Donald Trump<br>
<input type="hidden" name="yourtrumpvote" value="Donald Trump">


<input type="radio" name="yourvote" value="3">Bernie Sanders<br>
<input type="hidden" name="yoursandersvote" value="Bernie Sanders">


<input type="radio" name="yourvote" value="4">Ted Cruz<br>
<input type="hidden" name="yourcruzvote" value="Ted Cruz">
<input type="hidden" name="yourbloombergvote" value="Michael Bloomberg">     
<h2>Enter your full name: <br>
 <input id="yourname" type="text" name="yourname">
 </h2>
 
<!-- <h2>Enter your age: <br>
 <input type=text name=yourage>
 </h2>
 
<h2>Enter your weight: <br>
 <input type=text name=yourweight>
 </h2> -->
<script type="text/javascript">
	
	function checkform(){
	var name = document.getElementById("yourname");
	var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
	if (name.value == ""){
		alert("must enter email");
		return false;
	}
	else if (pattern.test(name.value) == false){
	 	alert("Invalid email address");
	 	return false;
	}
	
	return true;
}
	
</script> 
<input type=submit value="Submit your info!">
<input type=reset value=Cancel>

</form>
<h1>Hello, <?php echo $_POST['yourvote']; ?>! </h1>
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
	$myfile = fopen('myinfo.csv', 'a');
	$hasVoted = -1;
	while ($row= fgetcsv($myfile, 1024, ",")){
	
		$columns = count($row);
		print("<tr>\n");
		for ($m=0; $m<$columns; $m++) {
			$value = $row[$m];
			if ($value == $nameValue){
				$hasVoted = 0;
			}
}
// print "This is hasVoted ".$hasVoted;
// if ($hasVoted = -1){
// 	fputcsv($myfile, $theDecision);
// }
}

	

	//fwrite($myfile, $theValues);
	// fwrite($myfile, $theage);
	// fwrite($myfile, $theweight);
	
	fclose($myfile);
	print "this is nameValue ".$nameValue;
	print "this is $value ".$value;
	print "This is hasVoted ".$hasVoted;
	print "File written with this data: ";
	print $voteValue;

?>




</body>

</html>