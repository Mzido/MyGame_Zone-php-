<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>Game 2</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="olive">
<h1 align="center">THE LEARNERS LICENSE GAME</h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="game2pic.png" alt="learners license game" align="middle" width="304">
<fieldset><legend>the learners licence game</legend>
<form action="game2.php" method="post">
<table style="width: 100%" bordercolor="purple" border="3">
	<tr>
		<td>&nbsp;<label>1. A vehicle with inefficient brakes must be towed with a ?</label></td>
		<td>&nbsp;<label>a. rope</label><br><label>b. tow-bar</label><br><label>c. trailer</label></td>
		<td>&nbsp;<input type="text" name="Question1"></td>
	</tr>
	<tr>
		<td>&nbsp;<label>2. Your vehicle's dim lights should no shine for more than... </label></td>
		<td>&nbsp;<label>a. 45</label><br><label>b. 55</label><br><label>c. 150</label></td>
		<td>&nbsp;<input type="text" name="Question2"><label>metres</label></td>
	</tr>
	<tr>
		<td>&nbsp;3. If not indicated by a sign, the general speed limit in a town or city is...</td>
		<td>&nbsp;<label>a. 60</label><br><label>b. 90</label><br><label>c. 100</label></td>
		<td>&nbsp;<input type="text" name="Question3"><label>km/h</label></td>
	</tr>
	<tr>
		<td>&nbsp;<label>4. When towing a car with a towrope, you may not exceed... </label></td>
		<td>&nbsp;<label>a. 60</label><br><label>b. 45</label><br><label>c. 30</label></td>
		<td>&nbsp;<input type="text" name="Question4"><label>km/h</label></td>
	</tr>
	<tr>
		<td>&nbsp;<label>5. The thread on your car's tyres should not be less than...</label></td>
		<td>&nbsp;<label>a. 0.75</label><br><label>b. 1</label><br><label>c. 1.5</label></td>
		<td>&nbsp;<input type="text" name="Question5"><label>mm</label></td>
	</tr>
	<tr>
		<td>&nbsp;<label>6. In an accident where there is no injuries, the accident must be reported within... </label></td>
		<td>&nbsp;<label>a. 24</label><br><label>b. 36</label><br><label>c. 48</label></td>
		<td>&nbsp;<input type="text" name="Question6"><label>hours</label></td>
	</tr>
	<tr>
		<td>&nbsp;<label>7. How long must you leave your car parked in one place in an urban area?</label></td>
		<td>&nbsp;<label>a. 1</label><br><label>b. 3</label><br><label>c. 7</label></td>
		<td>&nbsp;<input type="text" name="Question7"><label>day(s)</label></td>
	</tr>
	<tr>
		<td>&nbsp;<label>8. For how long is a vehicle licence or clearance certificate valid ?</label></td>
		<td>&nbsp;<label>a. 3</label><br><label>b. 1</label><br><label>c. 12</label></td>
		<td>&nbsp;<input type="text" name="Question8"><label>months</label></td>
	</tr>
	<tr>
		<td>&nbsp;<label>9. All road signs with yellow background are...</label></td>
		<td>&nbsp;<label>a. warning</label><br><label>b. temporary</label><br><label>c. tourist</label></td>
		<td>&nbsp;<input type="text" name="Question9"><label>signs</label></td>
	</tr>
	<tr>
		<td colspan="3" align="center">&nbsp;<input type="submit" name="answers"></td>
	</tr>
</table>
</form>
</fieldset>
<?php 
if($_POST)
{
process_answers();
}
function process_answers()
{
$answer1=$_POST['Question1'];
$answer2=$_POST['Question2'];
$answer3=$_POST['Question3'];
$answer4=$_POST['Question4'];
$answer5=$_POST['Question5'];
$answer6=$_POST['Question6'];
$answer7=$_POST['Question7'];
$answer8=$_POST['Question8'];
$answer9=$_POST['Question9'];

$Score=0;

if($answer1=="b"){ $Score+=1;}
if($answer2=="a"){ $Score+=1;}
if($answer3=="a"){ $Score+=1;}
if($answer4=="c"){ $Score+=1;}
if($answer5=="b"){ $Score+=1;}
if($answer6=="a"){ $Score+=1;}
if($answer7=="c"){ $Score+=1;}
if($answer8=="c"){ $Score+=1;}
if($answer9=="b"){ $Score+=1;}

echo "your score is $Score.<p>"; 

}

?>
</body>
</html>
