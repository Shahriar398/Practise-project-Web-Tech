<?php

session_start();

if(!isset($_SESSION["id"]))
{
header("Location: login.php");
}

include("db.php");

$id=$_SESSION["id"];

$sql="SELECT * FROM student WHERE ID='$id'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

$username=$row["Username"];
$age=$row["Age"];
$dept=$row["Dept"];

$message="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$username=$_POST["username"];
$age=$_POST["age"];
$dept=$_POST["dept"];

$sql="UPDATE student
SET Username='$username',
Age='$age',
Dept='$dept'
WHERE ID='$id'";

if(mysqli_query($conn,$sql))
{

$_SESSION["username"]=$username;

$message="Profile Updated Successfully";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Profile</title>

</head>

<body>

<h1 align="center">

Edit Profile

</h1>

<hr>

<form method="post">

Username

<br>

<input
type="text"
name="username"
value="<?php echo $username;?>">

<br><br>

Age

<br>

<input
type="number"
name="age"
value="<?php echo $age;?>">

<br><br>

Department

<br>

<input
type="text"
name="dept"
value="<?php echo $dept;?>">

<br><br>

<input
type="submit"
value="Update">

<a href="dashboard.php">

<input
type="button"
value="Back">

</a>

<br><br>

<span style="color:green;">

<?php echo $message;?>

</span>

</form>

<hr>

<p align="center">

Copyright &copy;

<?php echo date("Y");?>

</p>

</body>

</html>