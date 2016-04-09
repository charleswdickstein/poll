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
       
<h2>Enter your full name: <br>
 <input type=text name=yourname>
 </h2>
 
<h2>Enter your age: <br>
 <input type=text name=yourage>
 </h2>
 
<h2>Enter your weight: <br>
 <input type=text name=yourweight>
 </h2>
 
<input type=submit value="Submit your info!">
<input type=reset value=Cancel>

</form>
<h1>Hello, <?php echo $_POST['yourname']; ?>! </h1>
<?php
$thename = $_POST['yourname']."\n";
$theage = $_POST['yourage']."\n";
$theweight = $_POST['yourweight']."\n";
?>

<h2>Your Complete Info:</h2>

<ul>
	<li><h3>Your name: <?php echo $thename; ?> </li>
	<li><h3>Your age: <?php echo $theage; ?> </li>
	<li><h3>Your weight: <?php echo $theweight; ?> </li>

</ul>
<?php
	$myfile = fopen('myinfo.csv', 'a');
	
	fwrite($myfile, array($thename, $theage, $theweight));
	// fwrite($myfile, $theage);
	// fwrite($myfile, $theweight);
	
	fclose($myfile);
	print "File written with this data: ";
	print array($thename, $theage, $theweight));

?>




</body>

</html>