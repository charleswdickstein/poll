<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>

<title>Recording your info to the disk file!</title>
<STYLE TYPE="text/css" MEDIA="screen, projection">

 
  @import url(index.css);
 
</STYLE>
</head>
<body>
<header>
<ul>
	<li><a href="emailorpoll.php">Big Read</a></li>
	<li><a href="store_info_line_read.php">Line Read</a></li>
	<li><a href="myinfo.csv">Text File</a></li>
</ul>
</header>
	<h1>Form to vote
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
<input type="hidden" name="yourkasich" value="John Kasich">
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
<input type=submit value="Submit your info!" >
<input type=reset value=Cancel>

</form>
<!--  -->




</body>

</html>