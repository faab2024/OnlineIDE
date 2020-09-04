<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: /spages/login.php');
}
?>
            
    <?php include 'nav.php';?>
         

<iframe width="1000" height="500" src="http://www.regrowup.com/ibe/client/demo/project1000/login.php" frameborder="2" allowfullscreen></iframe> 