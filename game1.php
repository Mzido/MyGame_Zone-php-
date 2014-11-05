<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>GAME PLAY</title>
</head>

<body style="background-color: #FFFFCC">
<img src="Guessgame.jpg" width="1325" height="350" alt="guess"/>
<?php echo "PLEASE CHOOSE A NUMBER 1-10<P>";
?>
<center>
<fieldset><legend >GAME PLAY</legend>
<form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">
<table border="0">
<tr>
<td>GUESS:</td>
<td><input name="Number" /></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Guess"/></td>
</tr>
<tr>
<td><input type="hidden"  name="random" value="<?php echo $x ?>" /></td>
</tr>
</table>
</form>
</fieldset>
</center>
<?php
//while(!=empty($_POST['username'])){
if($_POST)
{
$number=$_POST['Number'];

$x=rand(1,10);
$count=10;
$userscore=0;

if($number>$x)
{
--$count;
echo "YOUR NUMBER $number IS TOO HIGH.PLEASE TRY AGAIN<p>";
echo "you are left with $count chances<p>";
echo "TO PLAY AGAIN, CHOOSE A NUMBER 1-10<p>";
$x=rand(1,10);
}
else if($number<$x)
{
--$count;
echo "YOUR NUMBER $number IS TOO LOW.PLEASE TRY AGAIN<p>";
echo "you are left with $count chances<p>";
echo "TO PLAY AGAIN, CHOOSE A NUMBER 1-10<p>";
$x=rand(1,10);
}

else if($number==$x)
{
--$count;
++$userscore;
echo "CONGRATULALIONS YOU HAVE WON!.<p>";
echo "you are left with $count chances<p>";
echo "TO PLAY AGAIN, CHOOSE A NUMBER 1-10<p>";
$x=rand(1,10);
}

if($count<=0)
{
echo "Game over. your score is $userscore.";
}
}
?>
</body>
</html>
