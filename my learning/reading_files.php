<?php

$file = "example.txt";

if($handle = fopen($file,'r')){

    $content = fread($handle,filesize($file)); // number of bites 
    echo $content;

    fclose($handle);


}
else {
    echo " couldnt read file";
}





?>