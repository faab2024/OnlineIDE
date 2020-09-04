<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>

   

<body>
       
<!--Navbar(sit on top)-->
        
<div class="menu">
            
    <?php include 'nav.php';?>
         
</div>

       
        <center> <h1>Talk Us What You Need</h1> 
   
            <div class="container">
            <form action="/action.php" method="POST">

                <div class="row">
                    
                    
                          <div class="col-25">
                           <label for="">Project Name:</label> 
                           <input id="" name="product_name" placeholder="Product Name" type="text" required />
                           <label for="">Project Timing:</label> 
                           <input id="" name="quantity" placeholder="Quantity" type="text"required />
                           <label for="">Company:</label> 
                           <input id="" name="company_name" placeholder="Company" type="text"required />
                           <label for="">Project Owner:</label>
                           <input id="" name="packing" placeholder="Packing" type="text" required  />
                            
                           <label for="">Project Budget:</label>
                           <input id="" name="bill_date" placeholder="Date of Purchase" type="text" required/>
                           </div>
                           
                           <div class="col-25">
                            <label for="">Project Details :</label>
                           <textarea name="pdetails" rows="4" cols="50">

                           </textarea>
                           </div>
                  
                         
                        
                  

                </div>
                    
                 
                
                
                <div class="row">
                    
                        <div class="col-50">

                         <button type="submit"  class="btn btn-default" name='addproduct' >Submit Project</button>
                         
                         <button type="reset" class="btn btn-default">Clear Form </button>

                        </div>
                        
                      
                </div>
 
            </form>
            
        </div>
        </center>
        
<div class="menu">
            
    <?php include 'footer.php';?>
</div>