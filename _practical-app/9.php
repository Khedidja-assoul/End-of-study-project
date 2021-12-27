<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
			<a href="9.php?source=123">CLICK HERE</a>
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it*/
    if (isset($_GET['source'])){
        echo $_GET['source'];
        
    }
        

    // Step 2 - Set a cookie that expires in one week
                
    $name = "nana";
    $value = 129;
    $expiration = time() + (60*60*24*7);
    
    setcookie($name,$value,$expiration);
    
    // Step 3 - Start a session and set it to value, any value you want.
    
    session_start();
    $_SESSION['bienvenue'] = "olla amigos!!";
    
	
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>