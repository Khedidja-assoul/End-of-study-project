<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    
    class Car {
        
        
        var $wheels = 4;
        var $engine = 3;
        var $doors = 5;
        
        
        
        function moveWheels(){
            echo "wheels are moving biiitch!";
            $this->wheels = 10;
        }
        
    }
    
    if (method_exists("Car","moveWheels")){
        echo "methode exists booba!";
        
    }
    $bmw = new Car();
    $truck = new Car();
    
    
    //$bmw->moveWheels();
    echo $bmw->wheels."<br>";
    echo $truck->wheels = 10;

    ?>

</body>
</html>