<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php

if (isset($_POST['submit'])){
    Update();   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
   
   <div class="col-xs-6">
     <h1 class="text-center">Update</h1>
      <form action="login_create.php" method="post">
         
         <div class="form-group">
         <label for="username"> Username</label>
         <input type="text" name="username" class="form-control">
         </div>
         
         <div class="form-group">
         <label for="password"> password</label>
         <input type="password" name="password" class="form-control">
         </div>
         <br>
         
         <div class="form-group">
         <select name="id" id="">
          
          <?php
             
             show_all_data(); 
          ?>
           
            
             
         </select>
         </div>
         <br>
         
         
         <input class="btn btn-primary" type="submit" name="submit" value="Update" >
          
      </form>  
       
   </div>
    
</div>
   
  

</body>
</html>