<!-- 
Charles Dickstein
April 12, 2016
This page displays users' emails and their correspinding vote
 -->

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
<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>
	<title>List of Emails Or Histogram</title>
	
</head>
<body>

<h3>Results</h3>
<!-- One selects the information they would like to see and 
is redirected to a page that displays their choice  -->

<form action="https://aqueous-tundra-58634.herokuapp.com/emailorpoll.php"
       method="post" onSubmit="return checkform()">
<input type="radio" name="yourinfo" value="1" onclick="location.href = 'emailList.php'">Poll

<input type="radio" name="yourinfo" value="2" onclick="location.href = 'poll.php'">Poll

<input type=submit value="Submit"/>
</form>











</body>
</html>
