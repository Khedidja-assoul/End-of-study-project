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
    
   
    $bmw = new Car();
    $jet = new Plane();
   
     class Plane extends Car{
         
         
            
         
     }
    
    
    
    
    if(class_exists("Plane")){
        echo "it does !!.<br>";
        
    }
    
    echo $jet->wheels; 
    
    
    
    
    ?>

</body>
</html>