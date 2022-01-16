<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name=$email=$gender=$comment=$website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["userName"])){
        $nameErr = "Name is requrid";
    }else{
        $name = test_input($_POST["userName"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr = "only letters and white spaces are allowed";
        }
    }

    if(empty($_POST["userEmail"])){
        $emailErr = "Email is requrid";
    }else{
        $email = test_input($_POST["userEmail"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
    }
    if(empty($_POST["gender"])){
        $genderErr = "Gender is requrid";
    }else{
        $gender = test_input($_POST["gender"]);
        
    }
    if(empty($_POST["userWebsite"])){
        $websiteErr = " ";
    }else{
        $website = test_input($_POST["userWebsite"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
          }
    }
    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }   
}
 function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data= htmlspecialchars($data);
     return $data;
 }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from validation  </title>
    <style >
        body{
            width:400px;
            margin:0 auto;
        }
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1>
    <p><span > * required in field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     Name : <input type="text" name="userName" value="<?php echo $name;?>"><span> *<?php echo $nameErr;?></span> <br/><br/>
     Email : <input type="text" name="userEmail" value="<?php echo $email;?>"><span> *<?php echo $emailErr;?></span> <br/><br/>
     Website : <input type="text" name="userWebsite" value="<?php echo $website?>"> <span> <?php echo $websiteErr;?></span><span> *<?php echo $emailErr;?></span><br/><br/>
     Comment : <textarea name="comment" cols="25" rows="5"><?php echo $comment;?></textarea><br/><br/>
     Gender : 
     <input type="radio" name="gender" value="Female" <?php if (isset($gender) && $gender=="female") echo "checked";?>> Famale
     <input type="radio" name="gender" value="Male" <?php if (isset($gender) && $gender=="male") echo "checked";?>> Male
     <input type="radio" name="gender" value="Other" <?php if (isset($gender) && $gender=="other") echo "checked";?>> Other <span> *</span> <br/><br/>
     <input type="submit"  value="submit"> 

     <h1>Your Input : </h1>
     <?php
      echo $name;
      echo "<br/><br/>";
      echo $email;
      echo "<br/><br/>";
      echo $website;
      echo "<br/><br/>";
      echo $comment;
      echo "<br/><br/>";
      echo $gender;

     ?>
     

    </form>
</body>
</html>
