<!-- 
Charles Dickstein 
April 12, 2016
This file handles the voting form data
and determines whehter a user has voted or not already.
If a user has voted, the vote is rejcted. Otherwise, 
the vote is recorded -->

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
	case '5':
		$canditateNameValue = $_POST['yourkasichvote'];

}



$theDecision = array($canditateNameValue => $voteValue, $nameValue);
// $trump = $_POST['yourvote']."\n";
// $sanders = $_POST['yourvote']."\n";
// $cruz = $_POST['yourvote']."\n";
// $theValues = array($clinton, $trump, $sanders, $cruz);
?>




<?php
	
	//$handle = fopen('myinfo.csv',"r") or die("can't open the file!");
	
	$row = 1;
if (($handle = fopen("myinfo.csv", "r")) !== FALSE) {
	
	$hasVoted = false;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        // echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
        	if (strcmp($data[$c], $nameValue) == 0){
        		print "Already VOTED";
        		$hasVoted = true;
        	}
            //echo $data[$c] . "<br />\n";
        }
    }
   
    fclose($handle);
}
	
	
if ($hasVoted == false){
	$myfile = fopen('myinfo.csv', 'a');
	fputcsv($myfile, $theDecision);
	fclose($myfile);
	print "<h1>Thank you for voting $nameValue</h1>";
	print "<h1>You voted for $canditateNameValue</h1>";
}
else{
	print "<h1>You have already voted. One can not vote more than once</h1>";
}



	

	

?>