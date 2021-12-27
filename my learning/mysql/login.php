<?php include "includes/include.php" ?>
<body>

<div class="container">
   
   <div class="col-xs-6">
      
      <form action="login.php" method="post">
         
         <div class="form-group">
         <label for="username"> Username</label>
         <input type="text" name="username" class="form-control">
         </div>
         
         <div class="form-group">
         <label for="password"> password</label>
         <input type="password" name="password" class="form-control">
         </div>
         <br>
         <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
          
      </form>
       
   </div>
    
</div>



<?php
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $connection = mysqli_connect('localhost','root','','loginapp');
        if($connection){
            
            echo "we are connected biiitch ";
        }
        
    
        
       /* if ($username && $password){
            
            echo $username."<br>".$password;
          
            
        }
        */
        
    }

    ?>

</body>
</html>