<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scope</title>
</head>
<body>
<?php
    
    $x ="outside";
    function convert (){
    
        global $x;
        $x = "inside bitch";
        return $x;
        
    }
    
    echo $x;
    echo "<br>";
    convert();
    echo $x;
    

    ?>

</body>
</html>