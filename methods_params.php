<?php 

class Car {
    
    var $wheels = 4;
  
    
  
    static function MoveWheels($hello){
    
      echo $this->wheels = 10;
        static $hello;
        
    
    } 


}

$bmw = new Car();
echo Car::$MoveWheels();


?>