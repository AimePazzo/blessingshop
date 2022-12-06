<?php

@include 'connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM test WHERE username = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) == 1){

      $error[] = 'user already exist!';

   }else{

         $insert = "INSERT INTO test(username, password) VALUES('$name','$pass')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      
      }

};

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="icon" href="../Image/—Pngtree—logo vector1.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/login.css">
    <title>
        Blessingshop sign up
    </title>
</head>
<body>
        <div class="container">
            <img src="../Image/users icon.png" alt="user">
            <h1> sign up Form </h1>
            <form name="f1" onsubmit = "return comfrim()" method="post" action="">
                <?php
                if(isset($error)){
                   foreach($error as $error){
                      echo '<span class="mismatch">'.$error.'</span>';
                   };
                };
                ?>
               <p>Username</p>   
                <input type="text" name="username" id="username" placeholder="Enter Username or Email"value="">
                <p>Password</p>   
                <input type="password" name="password" id="password" placeholder="Enter Password" value="" >
                 <p>Confirm Password</p>   
                <input type="password" name="confrimPassword" id="confrimPassword" placeholder="Enter Password" value="" > 
                <P id="mismatch"></P>
                <input type="submit" name="submit" value="sign Up">
                Already have account <a href="Login.php">Login</a>
            </form>
               
        </div>   
       
    </form> 
    <script>  
        function comfrim()
        {  
            var pass = document.getElementById("password").value;  
            var conpass= document.getElementById("confrimPassword").value;  
            if(pass.length=="" && conpass.length=="") {  
                alert("Password and confrimPassword fields are empty");  
                return false;  
            }  
            else  
            {  
                if(pass.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                }   
                if (conpass.length=="") {  
                alert("ConfrimPassword field is empty");  
                return false;  
                } 
                 if(pass != conpass){
                    document.getElementById("mismatch").innerHTML="Password do not match";
                    document.getElementById("confrimPassword").style.borderBlockColor="red";
                    return false;
                 }
            }                             
        }  
    </script>      
</body>
</html>