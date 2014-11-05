<html>
<body style="background-color: #6699FF">
<?php
echo date('H:i, jS F');
?>

<img src="forphp.png" alt="Game Zone" width="1325" height="300" align="absmiddle">
<center>
<fieldset><legend>user login</legend>
<form action="login.php" method="POST">
<table border="0" Align="center">
<tr>
<td>Username*:</td>
<td>
&nbsp;<input type="text" name="username" size="15" maxlength="15"></td>
</tr>
<tr>
<td>Password*:</td>
<td>
&nbsp;<input type="password" name="password" size="15" maxlength="15"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Login" maxlength="40"></td>
</tr>
</table>
</form>
</fieldset>
</center>

<?php
if($_POST)
{
process_user();
}
function process_user()
{
$Username=$_POST["username"];
$Password=$_POST["password"];
$users=Array("Mzido","Bobo","Thozi","Enzo","Roro");
$User1="Mzido";
$correctPass="P@55w0rd!";
$hashPass=md5($correctPass);
$userPass=md5($Password);

if(empty($_POST['username']) || empty($_POST['password']))
{
echo '<p align="center"><font color="red" >YOU DID NOT ENTER ANY USERNAME OR/AND PASSWORD!</font></p>';
}
else if($Username!=$users[0] ||$Username!=$users[1] ||$Username!=$users[2] ||$Username!=$users[3] ||$Username!=$users[4] || $userPass!=$hashPass)
{
    echo '<p align="center"><font color="red" >INCORRECT USERNAME OR/AND PASSWORD PLEASE TRY AGAIN!</font></p>';
}
if($Username==$User1 && $userPass==$hashPass)
{
    header('Location:http://localhost/11039598/success.php');
}
}
?>
</body>
</html>
