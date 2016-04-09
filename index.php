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
       method="post">
<input type="radio" name="yourvote" value="0" checked>Hilary Clinton<br>
<input type="radio" name="yourvote" value="1">Donald Trump<br>
<input type="radio" name="yourvote" value="2">Bernie Sanders<br>
<input type="radio" name="yourvote" value="3">Ted Cruz<br>      
<!-- <h2>Enter your full name: <br>
 <input type=text name=yourname>
 </h2>
 
<h2>Enter your age: <br>
 <input type=text name=yourage>
 </h2>
 
<h2>Enter your weight: <br>
 <input type=text name=yourweight>
 </h2> -->
 
<input type=submit value="Submit your info!">
<input type=reset value=Cancel>

</form>
<h1>Hello, <?php echo $_POST['yourvote']; ?>! </h1>
<?php
$canditateNameValue = "";
$voteValue = $_POST['yourvote'];

switch ($voteValue){
	case '0':
		$canditateNameValue = $_POST["Hilary Clinton"];
		break;
	case '1':
		$canditateNameValue = $_POST["Donald Trump"];
		break;
	case '2':
		$canditateNameValue = $_POST["Bernie Sanders"];
		break;
	case '3':
		$canditateNameValue = $_POST["Ted Cruz"];
		break;
	default:
		$canditateNameValue = $_POST["Michael Bloomberg"];

}

$theDecision = array($canditateNameValue,$voteValue);
// $trump = $_POST['yourvote']."\n";
// $sanders = $_POST['yourvote']."\n";
// $cruz = $_POST['yourvote']."\n";
// $theValues = array($clinton, $trump, $sanders, $cruz);
?>

<h2>Your Complete Info:</h2>

<ul>
	<li><h3>Your vote: <?php echo $voteValue; ?> </li>
<!-- 	<li><h3>Your age: <?php echo $theage; ?> </li>
	<li><h3>Your weight: <?php echo $theweight; ?> </li> -->

</ul>
<?php
	$myfile = fopen('myinfo.csv', 'a');
	
	fputcsv($myfile, $theDecision);
	//fwrite($myfile, $theValues);
	// fwrite($myfile, $theage);
	// fwrite($myfile, $theweight);
	
	fclose($myfile);
	print "File written with this data: ";
	print $voteValue;

?>




</body>

</html>