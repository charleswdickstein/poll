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
	<li><a href="store_info_big_read.php"></a>Big Read</li>
	<li><a href="store_info_line_read.php"></a>Line Read</li>
</ul>
	
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
	$myfile = fopen('myinfo.txt', 'w');
	
	fwrite($myfile, $thename);
	fwrite($myfile, $theage);
	fwrite($myfile, $theweight);
	
	fclose($myfile);
	print "File written with this data: ";
	print "$thename $theage $theweight";

?>




</body>

</html>