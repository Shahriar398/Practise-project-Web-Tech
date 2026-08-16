<?php
 
session_start();
 
include("db.php");
 
$username="";
$password="";
$error="";
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
$username=$_POST["username"];
$password=$_POST["password"];
 
if(empty($username))
{
$error="Enter Username";
}
 
else if(empty($password))
{
$error="Enter Password";
}
 
else
{
 
$sql="SELECT * FROM student
WHERE Username='$username'
AND ID='$password'";
 
$result=mysqli_query($conn,$sql);
 
if(mysqli_num_rows($result)==1)
{
 
$row=mysqli_fetch_assoc($result);
 
$_SESSION["id"]=$row["ID"];
$_SESSION["username"]=$row["Username"];
 
header("Location: dashboard.php");
 
}
 
else
{
 
$error="Invalid Username or Password";
 
}
 
}
 
}
 
?>
 
<!DOCTYPE html>
 
<html>
 
<head>
 
<title>Login</title>
 
</head>
 
<body>
 
<h1 align="center">
 
Student Management System
 
</h1>
 
<hr>
 
<fieldset>
 
<legend>
 
<b>LOGIN</b>
 
</legend>
 
<form method="post">
 
Username
 
<br>
 
<input
type="text"
name="username"
value="<?php echo $username;?>">
 
<br><br>
 
Password (Student ID)
 
<br>
 
<input
type="password"
name="password">
 
<br><br>
 
<input
type="submit"
value="Login">
 
<a href="registration.php">
 
<input
type="button"
value="Registration">
 
</a>
 
<br><br>
 
<span style="color:red;">
 
<?php
 
echo $error;
 
?>
 
</span>
 
</form>
 
</fieldset>
 
<hr>
 
<p align="center">
 
Copyright &copy;
 
<?php echo date("Y");?>
 
</p>
 
</body>
 
</html>