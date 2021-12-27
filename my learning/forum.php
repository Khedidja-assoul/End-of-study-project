<?php

$names = array("nana","obob","sonson","papa",",mama","igor");
$max = 10;
$min = 3;
    
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (strlen($username) > $max ){ 
            echo "too much!!!";
            echo "<br>";
                
        };
        if (strlen($username) < $min ){ 
            echo "not enough!!!";
            echo "<br>";
        };
        
        
        
        if (in_array($username,$names)){
            echo "olla mia amore";
            echo "<br>";
         
        }
         
        else {echo "nope bitch not today"; 
              echo "<br>";
             
             }
        
    }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <form action="forum.php" method="post">
       <input type = text name ="username" placeholder="enter email or username">
       <br>
       <input type="password" name="password" placeholder="enter password">
       <br>
       <input type="submit" name="submit">
       
        
    </form>
    
</head>
<body>


</body>
</html>