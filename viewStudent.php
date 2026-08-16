<?php
 
session_start();
 
if(!isset($_SESSION["id"]))
{
header("Location: login.php");
}
 
include("db.php");
 
?>
 
<!DOCTYPE html>
 
<html>
 
<head>
 
<title>View Student</title>
 
</head>
 
<body>
 
<h1 align="center">
 
All Students
 
</h1>
 
<hr>
 
<table border="1" align="center" cellpadding="10">
 
<tr>
 
<th>ID</th>
<th>Username</th>
<th>Age</th>
<th>Department</th>
 
</tr>
 
<?php
 
$sql="SELECT * FROM student";
 
$result=mysqli_query($conn,$sql);
 
while($row=mysqli_fetch_assoc($result))
{
 
?>
 
<tr>
 
<td><?php echo $row["ID"]; ?></td>
 
<td><?php echo $row["Username"]; ?></td>
 
<td><?php echo $row["Age"]; ?></td>
 
<td><?php echo $row["Dept"]; ?></td>
 
</tr>
 
<?php
 
}
 
?>
 
</table>
 
<br>
 
<center>
 
<a href="dashboard.php">
 
<input type="button" value="Back">
 
</a>
 
</center>
 
<hr>
 
<p align="center">
 
Copyright &copy;
<?php echo date("Y");?>
 
</p>
 
</body>
 
</html>