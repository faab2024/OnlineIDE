<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /ibe/client/log/login.php');
}
?>

<?php
if(isset($_POST['submit'])){

//including the database connection file
include_once("connection.php");

$Key=$_POST['search_key'];
//fetching data in descending order (lastest entry first)
$resul = mysqli_query($mysqli, "SELECT * FROM Minventory WHERE login_id=".$_SESSION['id']." AND product_name LIKE '%".$Key."%' OR company_name LIKE '%".$Key."%' OR expiry_date LIKE '%".$Key."%' OR bill_date LIKE '%".$Key."%' OR quantity LIKE '%".$Key."%' OR batch_no LIKE '%".$Key."%' OR supplier LIKE '%".$Key."%' OR expiry LIKE '%".$Key."%' ORDER BY product_name ASC LIMIT 15");
}
?>    
<!--Navbar(sit on top)-->
<div class="menu">
            
    <?php include 'tool.php';?>
         
</div>


  <center>  
          
	   
		  <div class="table-responsive text-nowrap">
		  
		 <table class="table table-striped">
                             <thead>
                           
                            <h3>Your Project Status</h3>
                            
                            
                      
                                      <tr>
                                    
                                   <th>Product Name</th>
                               
                                   <th>Phase</th>
                               
                                   <th>Timing</th></th>
                                  
                                   <th>Due Date</th>
                                      </tr>
                              </thead>
                        
                           <tbody>
                               
                           <?php
                           //including the database connection file
                               include_once("connection.php");
                                if (mysqli_connect_errno())
                                    {
                                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                        }
                                        $Date=date("Y-m-d");
                                      
                                      //fetching data in descending order (lastest entry first)
                                         $ret = mysqli_query($mysqli, "SELECT * FROM  sales  WHERE login_id=".$_SESSION['id']." AND date_reg LIKE '$Date%' ORDER BY date_reg ASC");
		                  while($rs = mysqli_fetch_array($ret)) {
		                    
		                  echo "<tr>";
		                  echo "<td>".$rs['product_name']."</td>";
		                  echo "<td>".$rs['price']."</td>";
		                  echo "<td>".$rs['quantity']."</td>";
		                  echo "<td>".$rs['amount']."</td>";
					echo "</tr>";
		                 
		                  }
                          ?>
                        </tbody>
                        
	
            </table>   
        
          </div>
           

</center>
            
   <div>
            
    <?php include 'footer.php';?>
    
   </div>	
</div>