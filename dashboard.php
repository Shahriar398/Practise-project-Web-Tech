<?php
 
session_start();
 
if(!isset($_SESSION["id"]))
{
header("Location: login.php");
}
 
?>
 
<!DOCTYPE html>
 
<html>
 
<head>
 
<title>Dashboard</title>
 
</head>
 
<body>
 
<h1 align="center">
 
Student Management System
 
</h1>
 
<hr>
 
<h3 align="right">
 
Logged in as
 
<?php echo $_SESSION["username"]; ?>
 
|
 
<a href="logout.php">
 
Logout
 
</a>
 
</h3>
 
<fieldset>
 
<legend>
 
<b>Dashboard</b>
 
</legend>
 
<ul>
 
<li>
 
<a href="viewStudent.php">
 
View All Students
 
</a>
 
</li>
 
<br>
 
<li>
 
<a href="view profile.php">
 
View Profile
 
</a>
 
</li>
 
<br>
 
<li>
 
<a href="editprofile.php">
 
Edit Profile
 
</a>
 
</li>
 
<br>
 
<li>
 
<a href="changepass.php">
 
Change Password
 
</a>
 
</li>
 
<br>
 
<li>
 
<a href="searchStudent.php">
 
Search Student
 
</a>
 
</li>
 
<br>
 
<li>
 
<a href="deleteStudent.php">
 
Delete Student
 
</a>
 
</li>
 
<br>
 
<li>
 
<a href="logout.php">
 
Logout
 
</a>
 
</li>
 
</ul>
 
</fieldset>
 
<hr>
 
<p align="center">
 
Copyright &copy;
 
<?php echo date("Y");?>
 
</p>
 
</body>
 
</html>