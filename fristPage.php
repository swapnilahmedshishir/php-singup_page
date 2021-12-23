<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
       <form action="idCard.php" method="post" >
         <div  class="startSignUp outerDiv">
           <div class="innerDiv">
               <h1>Sign Up</h1>               
               <h5>Enter Your personal details</h5>
               <ul>
                <li><input type="radio" name="gender" id="genderId">Male</li>
                <li><input type="radio" name="gender" id="genderId">Female</li>   
               </ul>
               
               
               <input type="text" name="fullName"  placeholder="Full name"></br>
               <input type="email" name="email" placeholder="Email" require ></br>
               <input type="text" name="address" placeholder="Address" ></br>
               <input type="text" name="cityName" placeholder="City/Town"></br>
               <input type="text" name="country" placeholder="Country"></br>
               <h5>Enter Your personal details<h5>
                <input type="text" name="userName" placeholder ="Username" ></br>
                <input type="password" name="password" placeholder="password"></br>
                <input type="password" name="reTypepassword" placeholder="Re-Type your password"></br>
                <input type="checkbox" name="checkBox" id="checkBox"><label>I agree to this form</label></br>
                <input type ="submit" name="submit" value="Submit" id ="submit">
            </div>
          </div>
        </form>      
    </main>
    
</body>
</html>