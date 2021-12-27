<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	//  Step 1 - Create a database in PHPmyadmin
    // done

    // Step 2 - Create a table like the one from the lecture
        //done

    // Step 3 - Insert some Data
        
        //done

    //  Step 4 - Connect to Database and read data
        
    $connection = mysqli_connect('localhost','root','','exo');
    $query = "SELECT * FROM users";
        
    $result = mysqli_query($connection,$query);
    
    if ($result){
        echo "<h1> We are connected !! </h1>";
        
    }
        
        ?>
    
        <?php
    
        while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <pre>
            
            <?php
            
            print_r($row);
            
             }
            ?>
            
            </pre>
            
        
         



</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
