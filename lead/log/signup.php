<?php session_start(); ?>
<?PHP include('../header.php');?>
    

<?php

if(isset($_POST['signup'])) {
    
$databaseHost = 'localhost';
$databaseName = 'bnsznyem_rgu';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';


    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$location= $_POST['location'];
	$ip= $_POST['ip'];
	$creator=$_GET['c'];
	$query=$_POST['qu'];
	$timing=$_POST['timing'];
	$budget=$_POST['budget'];
	
	
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
	
    $sql="INSERT INTO leads(name,query,username,password,phone,email,location,ip,timing,budget,creator) VALUES('$name','$query','$email','$email','$phone','$email','$location','$ip','$timing','$budget','$creator')";
   $result=mysqli_query($conn, $sql);
	if ($result != null) {
        
	    header("Location: login.php"); 
	 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $reg="Not Registered, Try Again Now";
    header("Location:url=signup.php");
}

mysqli_close($conn);
	
}
       
?>

<!DOCTYPE html>
<html>
       <link rel="shortcut icon" href="/images/slogo.png" type="image/png"/>
       <link rel="apple-touch-icon" href="/images/slogo.png" type="image/png"/>
    
<title>RGU Tech</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
</head>
 <?PHP echo $reg; ?>
<body>    
  
    
    <form action=""  name="signup" method="post" >
      <header><h3>Signup </h3></header>
     <label>Full Name</label>
     <input type="text" placeholder="Your Full Name" name="name"/>
      <label>Mobile No</label>
      <input name="phone" type="text" value="" placeholder="Mobile No..."/>
      
      <label>Email</label>
      <input type="text" placeholder="Active Email" name="email" required>
      
       <label>Location</label>
      <input type="text" placeholder="Location" name="location">
     
    <button type="submit" name="signup">Signup </button>
    
     <center><a href="login.php">Login</a></center>
    
   </form>
    
    

  </body>
</html>