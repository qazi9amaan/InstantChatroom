<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">

    
    <title>Kirangle| Chatroom</title>

     <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  </head>
  
  <body>

   <!-- Login -->
    <div class="login-block login-box">
      <div class="logo">
       <img src="images/logo.png">
      </div>
      <form action="check-login.php" method="post">
        <input type="text" placeholder="Username" id="username" name="username" class="username"/>
        <input type="password" placeholder="Password" id="password" name="password" class="password"/>
        <input type="submit" value="Log In" id="loginbutton" name="loginbutton" class="login"/>
      </form>
      <p style="text-align:center; font-size:14px">Not registered ? <strong style="color:#ff656c" id="show" >Create an account</strong></p>
  </div>

 <!-- Registration -->
  <div class="login-block register-box">
      <div class="logo">
        <img src="images/logo.png"/>
      </div>
    <form action="" method="post">    
        <input type="text" placeholder="Full Name" id="reg_fullname" name="reg_fullname" class="fullname"/>
        <input type="text" placeholder="Username" id="reg_username" name="reg_username" class="username" />
        <input type="password" placeholder="Password" id="reg_password" name="reg_password" class="password" />
      <input type="submit" value="Register" id="newreg" name="newreg" class="login"/>
    </form>
      <p style="text-align:center; font-size:14px">Have an account ? <strong style="color:#08C400" id="hide">Sign In</strong></p>




    
     <!-- Optional JavaScript -->
     <script src="js/main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>