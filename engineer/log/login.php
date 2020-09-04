<?php
session_start();
error_reporting(0);
include 'config.php';
$databaseHost = 'localhost';
$databaseName = 'bnsznyem_ice';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';

$con = mysqli_connect($databaseHost,$databaseUsername, $databasePassword,$databaseName); 
if(isset($_POST['login']))  {
$email=$_POST['email']; // Get username
//$password=$_POST['password']; // get password
//query for match  the user inputs
$ret=mysqli_query($con,"SELECT * FROM creator WHERE email='$email'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0){

                      
                       $validuser = $num['email'];
		               $_SESSION['valid'] = $validuser;
			           $_SESSION['name'] = $num['name'];
			           $_SESSION['phone'] = $num['phone'];
			           $_SESSION['location'] = $num['location'];
                       $_SESSION['id']=$num['id']; // hold the user id in session
                      
                      
        

   //if OTP is confirmed 
	header("Location: /ibe/client/home/home.php");
	
		
  }else{
   echo "Not Sucessd"; 
}

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
<body>    

<form name="" method="post" >
  <div class="tblLogin">
  <header><h3>Login </h3></header>
  <p style="color:red;"></p>
  <label>Email<span>*</span></label>
  <input name="email" type="text" value="" placeholder="Email..." required />
  <button type="submit" name="login">Login</button>
  </div>
</form>
    
    
    
    
    
  </body>
</html>