<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>



<?php 



echo rand(1, 1000);





 ?>








<?php 

$string = "sdafjkdasjkfjsdakjfkl";


$valueLength = strlen($string );


echo $valueLength;





 ?>





<?php 

$number = 190;



$numbers = array(24323,2342,354,363,7756,36,3,190);


$checked = in_array($number, $numbers);


if($checked) {

echo "found";


}


if(in_array($number, $numbers)){

echo "found";


}




 ?>

</body>
</html>