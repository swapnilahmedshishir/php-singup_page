<?php 
if(isset($_POST["submit"])){  
   $fullName = $_POST["fullName"];
   $email = $_POST["email"];
   $country = $_POST["country"];
   $userName = $_POST["userName"];   
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idCard.css">
    <title>YOUR DATA</title>
   
</head>
<body>  
    <div class="card">
      <div class="card-text">
        <div>
        <img src="image/img_avatar1.png" class="card-img">
        <h3><?php if(isset($userName)){echo $userName;}?> </h3>
        </div>       
        <div class="card-info">        
          <h3>FullName: <?php if(isset($fullName)){echo $fullName;}?></h3>
          <h3>Email: <?php if(isset($email)){echo $email;}?> </h3>
          <h3>Country: <?php if(isset($country)){echo $country;}?></h3>
        </div>        
      </div>     
    </div>    
</body>
</html>