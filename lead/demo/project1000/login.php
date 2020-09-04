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
$phone=$_POST['phone']; // Get username
//$password=$_POST['password']; // get password
//query for match  the user inputs
$ret=mysqli_query($con,"SELECT * FROM people WHERE phone='$phone'");
$num=mysqli_fetch_array($ret);
// if user inputs match if condition will runn
if($num>0){

                    
                       $validuser = $num['phone'];
		               $_SESSION['valid'] = $validuser;
			           $_SESSION['name'] = $num['name'];
			          
                       $_SESSION['id']=$num['id']; // hold the user id in session
                     
                      
        // generate OTP
		$otp = rand(100000,999999);
		/////
		
		// Register OTP in the Database
		$Ex= '0';
		$d = date("Y-m-d H:i:s");
     	$q ="INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES('$otp','$Ex','$d')";
		mysqli_query($con,$q);
		///////////
				
	   //Sending the OTP to Email or Mobile Phone		
      
      $phone = $_POST['phone'];
     
      
     $sender = 'TXTSMS';
$mob = $phone;
$auth= "D!~1262ckZcj4AyIB";
$msg = urlencode($otp); 

$url = 'https://global.datagenit.com/API/sms-api.php?auth='.$auth.'&msisdn='.$mob.'&senderid='.$sender.'&message='.$msg.'';  // API URL

SendSMS($url);  // call function that return response with code


      //////////////////////////////////////////////////

   //if OTP is confirmed 
	header("Location: otp.php");
	
		
  }else{
   echo "Not Sucessd"; 
}

}
?>
<?PHP
function SendSMS($hostUrl){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $hostUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // change to 1 to verify cert
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result = curl_exec($ch);
return $result;
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
  <label>Mobile<span>*</span></label>
  <input name="phone" type="text" value="" placeholder="Mobile No..." required />
  <button type="submit" name="login">Login</button>
  </div>
</form>
    
    
    
    
    
  </body>
</html>