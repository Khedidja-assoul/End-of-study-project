<?php

$file = "example.txt";

if($handle = fopen($file,'w')){

    fwrite($handle,"I love php but i wanna get rid of it ASAP!!");

    fclose($handle);


}
else {
    echo " application couldn't write on the file";
}





?>