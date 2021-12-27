<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

//  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
    
    if (3 > 5){
        echo "three is greater than five";
        }
    
        elseif (3 > 4){
            echo "three is greater than four ";  
        }
    
        else 
        {echo "i love PHP";
             }
    




//	Step 2: Make a forloop  that displays 10 numbers
  for ($i=0; $i<= 10; $i++){
      echo $i."<br>";
  }

//	Step 3 : Make a switch Statement that test againts one condition with 5 cases
    $name = "nana";
    switch ($name){
        case "obob" : echo "nana is not obob"; break;
        case "sonson" : echo "nana is not sonson";break;
        case "nana" : echo "this is nana";break;
    }

 

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>