<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $list = [ 12,157,9876,7654,111,999];
    echo max($list);
    echo "<br>";
    
   
    echo min($list);
    echo "<br>";
    
    echo print_r($list);
    echo "<br>";
    
    sort($list);
    
    echo print_r($list);
    echo "<br>";
    
    echo array_slice($list);
    echo "<br>";
    
    
    ?>

</body>
</html>