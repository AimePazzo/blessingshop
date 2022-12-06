<?php

@include 'connection.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM test WHERE username = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $_SESSION['admin_name'] = $row['username'];
    header('location:../Homepage/index.php');
         
     
   }else{
      $error[] = 'incorrect username or password!';
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
        Blessingshop Login
    </title>
</head>
<body>
        <div class="container">
            <img src="../Image/users icon.png" alt="user">
            <h1> Login Form </h1>
            <form name="f1" onsubmit = "return validation()" method="post" action="">
                <?php
                  if(isset($error)){
                     foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                     };
                  };
               ?>
               <p>Username</p>   
                <input type="text" name="username" id="username" placeholder="Enter Username"value="">
                <p>Password</p>   
                <input type="password" name="password" id="password" placeholder="Enter Password" value="" > 
                <input type="submit" name="submit" value="login">
                 Forget Your <a href="reset-password.php" > Password? </a>
                <a href="register.php" class="frget">Create Account</a>  
            </form>
               
        </div>   
       
    </form> 
    <script>  
        function validation()  
        {  
            var id=document.f1.username.value;  
            var ps=document.f1.password.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
    </script>      
</body>
</html>