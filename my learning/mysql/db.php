<?php 
    
        
        
        $connection = mysqli_connect('localhost','root','','loginapp');
        
        $query = "SELECT * FROM users";
        
        $result = mysqli_query($connection,$query);
        
        if(!$result){
            die('Query died');
            
        }
        
    ?>