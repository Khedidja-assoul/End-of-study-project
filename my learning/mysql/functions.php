<?php include "db.php"; ?>

<?php

function createRecord(){
    
    if (isset($_POST['submit'])){
    
        global $connection; 
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);
        
        $hash = "$2y$10$";
        $salt = "iamusingcrazystrings22";
        $hash_and_salt = $hash.$salt;
        
        $password = crypt($password,$hash_and_salt);

        
        $query = "INSERT INTO users (username,password) VALUES ('$username','$password')";
        
        $result = mysqli_query($connection,$query);
        
        if (!$result){
            die("connection failed". mysqli_error());
        }
        else{
            echo "record created bitch!!!!";
        }
    ;
             
    
}
}
    


function show_all_data(){


global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection,$query);

if(!$result){
    die('Connection failed');
    
    
}

while($raw = mysqli_fetch_assoc($result)){
                
  $id = $raw['id'];
                
  echo "<option value = '$id'>$id</option>";
                
                
}
}



function Update(){
    
    global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];
    
    $query  = "SELECT users SET ";
    $query .= "username = $username , " ;
    $query .= "password = $password" ;
    $query .= "WHERE id= $id" ; 
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("CONNECTION FAILED !");
        
    }
    else{
        echo "Record updated";
    }
}




function deleteRaws(){
    
    if (isset($_POST['submit'])){
    
    global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];
    
    $query  = "DELETE FROM users ";    
    $query .= "WHERE id= $id" ; 
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("CONNECTION FAILED !".mysqli_error);
        
    } else{
            echo "record deleted ";
        }
}
    }

?>