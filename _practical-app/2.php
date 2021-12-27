<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		// Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
        $number1 = 10;
        $number2 = 20;

        //Step 2: Add the two variables and display the sum with echo:
        echo $number1 + $number2 ;
        echo "<br>";
          


		  //Step3: Make 2 Arrays with the same values, one regular and the other associative
          $namesListNormal = array("Igor","nana");
          $namesListAssociative = array ("FirstName" => "he" ,"SecondName" => "she");
          
          print_r($namesListNormal);
          echo "<br>";
          print_r($namesListAssociative);
          echo "<br>";

		  //Step4: Make a constant and set it to the value of PHP. and use an echo to print it out
            const name = PHP;
            echo name;

			

			

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>