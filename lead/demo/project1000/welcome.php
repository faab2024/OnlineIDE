<?php
session_start();
if($_SESSION['valid'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">    
<p>Welcome Dear: <?php echo $_SESSION['name'];?>  
<h1>This Is your Project Demo for OTP System</h1>


<a href="login.php">Log Out</a> </p>

 </body>
</html>
<?php
} else{
header('location:logout2.php');
}
?>