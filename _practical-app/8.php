<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	// Step 1 -Make a variable with some text as value
        
        $word = "love" ; 
    
    

	//	Step 2 - Use crypt() function to encrypt it
        
        $hash_format = "$2y$10$";
        
        $salt = "nanaobobsoumaigorpapamama";
        
        $hash_and_salt = $hash_format.$salt;
        
        

    //		Step 3 - Assign the crypt result to a variable
        
        $hashed_word = crypt($word,$hash_and_salt);

	//	Step 4 - echo the variable
        
        echo $hashed_word;

	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>