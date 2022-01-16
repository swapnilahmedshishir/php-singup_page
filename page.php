<?php
$name=$email=$gender=$comment=$website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["userName"]);
    $email = test_input($_POST["userEmail"]);
    $gender = test_input($_POST["gender"]);
    $website = test_input($_POST["userWebsite"]);
    $comment = test_input($_POST["comment"]);
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
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h1>PHP Form Validation Example</h1>
    <p><span > * required in field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     Name : <input type="text" name="userName"><span> *</span> <br/><br/>
     Email : <input type="text" name="userEmail"><span> *</span> <br/><br/>
     Website : <input type="text" name="userWebsite"> <br/><br/>
     Comment : <textarea name="comment" cols="25" rows="5"></textarea><br/><br/>
     Gender : 
     <input type="radio" name="gender" value="Female"> Famale
     <input type="radio" name="gender" value="Male"> Male
     <input type="radio" name="gender" value="Other"> Other <span> *</span> <br/><br/>
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