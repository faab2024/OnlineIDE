<?PHP
$success = "";
$error_message = "";

$databaseHost = 'localhost';
$databaseName = 'bnsznyem_rgu';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';

$conn = mysqli_connect($databaseHost,$databaseUsername, $databasePassword,$databaseName); 
$otp=$_POST['otp'];
if(isset($_POST['login']))  {
    
 
     //$q="SELECT * FROM otp_expiry WHERE otp='". $_POST["otp"] ."' AND is_expired !=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)";
 
         //$result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='$otp'");
         
          $result = mysqli_query($conn,"SELECT otp FROM otp_expiry WHERE otp='$otp' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
          $num=mysqli_fetch_array($result);
	if($num>0) {
	    $res = mysqli_query($conn,"UPDATE otp_expiry SET is_expired =1 WHERE otp='$otp'");
		header("Location: welcome.php");	
	} else {
		
		$error_message = "Invalid OTP!";
		header("Location: login.php");
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
  <header><h3>Enter The OTP to Login</h3></header>
  <p style="color:red;"></p>
  <label>OTP<span>*</span></label>
  <input name="otp" type="text" value="" placeholder="Enter OTP" required />
  <button type="submit" name="login">Submit</button>
</form>
    
    
    
    
    
  </body>
</html>