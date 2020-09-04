<?php
session_start();
error_reporting(0);
include 'config.php';
$databaseHost = 'localhost';
$databaseName = 'bnsznyem_rgu';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';

$con = mysqli_connect($databaseHost,$databaseUsername, $databasePassword,$databaseName); 
if(isset($_POST['login']))  {
$username=$_POST['email']; // Get username
$password=$_POST['password']; // get password
//query for match  the user inputs
$ret=mysqli_query($con,"SELECT * FROM people WHERE email='$username'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0){

                      // $validuser = $num['username'];
		               $_SESSION['valid'] = $validuser;
			           $_SESSION['name'] = $num['name'];
			          // $_SESSION['package']= $num['package'];
                       $_SESSION['id']=$num['id']; // hold the user id in session
                        
                        	// generate OTP
		$otp = rand(100000,999999);
		// Send OTP
		$Ex= '0';
		$d = date("Y-m-d H:i:s");
		
     	$q ="INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES('$otp','$Ex','$d')";
			//$current_id = mysqli_insert_id($conn);
		mysqli_query($con,$q);
				
			
       function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
   }
$to_email = $_POST['email'];
$subject = "RGU System OTP";
$message = $otp;
$headers = "system@regrowup.com";
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    
}


	header("Location: otp2.php");
		
		
           
 	             
		

/*
$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
$action="Login";
// query for inser user log in to data base
mysqli_query($con,"insert into userlog(userId,username,action,userIp) values('".$_SESSION['id']."','".$_SESSION['valid']."','$action','$uip')");
// code redirect the page after login
$extra="home.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host/mpages/$extra");
exit();
}
// If the userinput no matched with database else condition will run
else
{
$_SESSION['msg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
 }
 */
 
 
 
}else{
   echo "Not Sucessd"; 
}

}
?>
<!DOCTYPE html>
<html>
       <link rel="shortcut icon" href="/images/slogo.png" type="image/png"/>
       <link rel="apple-touch-icon" href="/images/slogo.png" type="image/png"/>
    
<title>RegrowUp Tech</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>    
	<?php
		if(!empty($error_message)) {
	?>
	<div class="message error_message"><?php echo $error_message; ?></div>
	<?php
		}
	?>
<form name="login" method="post" >
  <div class="tblLogin">
  <header><h3>Login To RGU Demo </h3></header>
  <p style="color:red;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
  <label>Enter Your <span>*</span></label>
  <input name="email" type="text" value="" placeholder="Enter Your email" required />
  <button type="submit" name="login">Login</button>
  </div>
</form>
    
    
    
    
    
  </body>
</html>