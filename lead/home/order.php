<?php session_start(); ?>

<?php

if(isset($_POST['addpro'])) {
    
$databaseHost = 'localhost';
$databaseName = 'bnsznyem_ice';
$databaseUsername = 'bnsznyem_abfa';
$databasePassword = '!@#123qweasdzxc';


    $name = $_POST['name'];
    $pname = $_POST['project'];
    $com = $_POST['organization'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$location= $_POST['location'];
	$ip= $_SERVER['REMOTE_ADDR'];
	$creator=$_GET['c'];
	$query=$_POST['qu'];
	$timing=$_POST['timing'];
	$budget=$_POST['budget'];
	
	
	 $ipaddress = $_SERVER['REMOTE_ADDR'];
 $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
 $referrer = $_SERVER['HTTP_REFERER'];
 $datetime = date("F j, Y, g:i a");
 $useragent = $_SERVER['HTTP_USER_AGENT'];

  
//INSERT INTO `contact_us`(`id`, `sender`, `recp`, `subject`, `message`, `date_reg`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

 //$sql="insert into site_visitor(ip,current_page,referrer,time,user_agent) values('$ipaddress','$page','$referrer','$datetime','$useragent')";

 // mysqli_query($mysqli, $sql);
	
//Create connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
	 $sql="INSERT INTO leads(project,query,name,ip,timing,referer,budget,organization,creator) VALUES('$pname','".$query."','$name','$ip','$timing','$referrer','$budget','$com','$creator')";
    //$sql="INSERT INTO leads(name,query,username,password,phone,email,location,ip,timing,budget,creator) VALUES('$name','$query','$email','$email','$phone','$email','$location','$ip','$timing','$budget','$creator')";
   $result=mysqli_query($conn, $sql);
	if ($result != null) {
        
	    header("Location: $referrer"); 
	 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $reg="Not Registered, Try Again Now";
    header("Location:url=order.php");
}

mysqli_close($conn);
	
}
       
?>
   

<body>
       
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>

       
        <center> <h1>Talk Us What You Need</h1> </center>
   
            <div class="container">
            <form action="" method="POST">

                <div class="row">
                    
                    
                          <div class="col-25">
                           <label for="">Project Name:</label> 
                           <input id="" name="project" placeholder="Project Name" type="text" required />
                            <label for="">Project Details:</label> 
                           <p><textarea id="subject" class="textarea" name="qu" placeholder="Write Or Paste Details of Your Project.." style="height:400px"></textarea></p>
         
                           
                           <label for="">Project Timing:</label> 
                           <input id="" name="timing" placeholder="Timing" type="text"required />
                           <label for="">Company:</label> 
                           <input id="" name="organization" placeholder="Company" type="text"/>
                           <label for="">Project Owner:</label>
                           <input id="" name="name" placeholder="Your Name" type="text" required  />
                            
                           <label for="">Project Budget:</label>
                           <input id="" name="budget" placeholder="Project Budget" type="text" required/>
                           </div>
                           
                         
                  
                         
                        
                  

                </div>
                    
                 
                
                
                <div class="row">
                    
                        <div class="col-50">

                         <button type="submit"  class="btn btn-default" name='addpro' >Submit Project</button>
                         
                         <button type="reset" class="btn btn-default">Clear Form </button>

                        </div>
                        
                      
                </div>
 
            </form>
            
        </div>
        
        
<div class="menu">
            
    <?php include 'footer.php';?>
</div>