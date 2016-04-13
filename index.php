<!-- 
Charles Dickstein
April 12, 2016
This page allows the user to vote 
for a presidential candidate with a form. 
The data from the form is handled with a php script
 -->
<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>

<title>Presidential histogram</title>
<STYLE TYPE="text/css" MEDIA="screen, projection">

 
  @import url(index.css);
 
</STYLE>
</head>
<body>
<header>
<ul>
	<li><a href="emailorhistogram.php">Results</a></li>
	<li><a href="myinfo.csv">Download Text File</a></li>
</ul>
</header>
	<h1>Presidential histogram</h1>
	<!-- Form action redirects to a php script to handle the input -->
<form action="https://aqueous-tundra-58634.herokuapp.com/handle_form.php"
       method="post" onSubmit="return checkform()">
<input type="radio" name="yourvote" value="1" checked>Hilary Clinton<br>
<input type="hidden" name="yourclintonvote" value="Hilary Clinton">

<input type="radio" name="yourvote" value="2">Donald Trump<br>
<input type="hidden" name="yourtrumpvote" value="Donald Trump">


<input type="radio" name="yourvote" value="3">Bernie Sanders<br>
<input type="hidden" name="yoursandersvote" value="Bernie Sanders">


<input type="radio" name="yourvote" value="4">Ted Cruz<br>
<input type="hidden" name="yourcruzvote" value="Ted Cruz">
<input type="radio" name="yourvote" value="5">John Kasich<br>
<input type="hidden" name="yourkasichvote" value="John Kasich">
<h2>Enter your full name: <br>
 <input id="yourname" type="text" name="yourname">
 </h2>
 
<!-- Checks if email entered is valid and if user has already 
voted
 -->
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
<input type=submit value="Submit your info!" >
<input type=reset value=Cancel>

</form>
<!--  -->




</body>

</html>