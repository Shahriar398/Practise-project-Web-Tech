<?php
 
include("db.php");
 
$id="";
$username="";
$age="";
$dept="";
 
$idError="";
$usernameError="";
$ageError="";
$deptError="";
$message="";
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
$id=$_POST["id"];
$username=$_POST["username"];
$age=$_POST["age"];
$dept=$_POST["dept"];
 
if(empty($id))
{
$idError="Enter ID";
}
 
if(empty($username))
{
$usernameError="Enter Username";
}
 
if(empty($age))
{
$ageError="Enter Age";
}
 
if(empty($dept))
{
$deptError="Enter Department";
}
 
if($idError=="" && $usernameError=="" && $ageError=="" && $deptError=="")
{
 
$check="SELECT * FROM student WHERE ID='$id'";
 
$result=mysqli_query($conn,$check);
 
if(mysqli_num_rows($result)>0)
{
$message="ID Already Exists";
}
else
{
 
$sql="INSERT INTO student(ID,Username,Age,Dept)
VALUES('$id','$username','$age','$dept')";
 
if(mysqli_query($conn,$sql))
{
$message="Registration Successful";
}
else
{
$message="Registration Failed";
}
 
}
 
}
 
}
 
?>
 
<!DOCTYPE html>
 
<html>
 
<head>
 
<title>Registration</title>
 
</head>
 
<body>
 
<h1 align="center">
 
Student Registration
 
</h1>
 
<hr>
 
<fieldset>
 
<legend><b>Registration</b></legend>
 
<form method="post">
 
ID
 
<br>
 
<input type="number" name="id" value="<?php echo $id;?>">
 
<span style="color:red;">
 
<?php echo $idError;?>
 
</span>
 
<br><br>
 
Username
 
<br>
 
<input type="text" name="username" value="<?php echo $username;?>">
 
<span style="color:red;">
 
<?php echo $usernameError;?>
 
</span>
 
<br><br>
 
Age
 
<br>
 
<input type="number" name="age" value="<?php echo $age;?>">
 
<span style="color:red;">
 
<?php echo $ageError;?>
 
</span>
 
<br><br>
 
Department
 
<br>
 
<input type="text" name="dept" value="<?php echo $dept;?>">
 
<span style="color:red;">
 
<?php echo $deptError;?>
 
</span>
 
<br><br>
 
<input type="submit" value="Register">
 
<input type="reset" value="Reset">
 
<a href="login.php">
 
<input type="button" value="Login">
 
</a>
 
<br><br>
 
<span style="color:green;">
 
<?php echo $message;?>
 
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