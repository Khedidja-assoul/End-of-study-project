<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    function addNumbers ($number1,$number2){
        $sum = $number1 + $number2;
        return $sum;
          
        
    }
    
    $result = addNumbers(10,20);
    echo $result;
    

    ?>

</body>
</html>