<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


//  Step1: Use a pre-built math function here and echo it
    
    echo sqrt(144);
    echo "<br>";


//	Step 2:  Use a pre-built string function here and echo it
    
    echo strlen("hello bibi r u awake yet");
    echo "<br>";
    


//	Step 3:  Use a pre-built Array function here and echo it
    $list = array(23,89,65);
    sort($list);
    print_r($list);


	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>