<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    
    class Car {
        
        function moveWheels(){
            echo "wheels are moving biiitch!";
        }
        
    }
    
    if (method_exists("Car","moveWheels")){
        echo "methode exists booba!";
        
    }

    ?>

</body>
</html>