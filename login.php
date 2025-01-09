<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="biruhlogo.png" type="image/x-icon">
    <title>Register</title>
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome/all.min.css">
    <link rel="stylesheet" href="fontawesome/fontawesome.min.css">
</head>
<body>
    <!--navigation-->
    <?php
   
   include 'header.php';?>
    

    <section id="register">
        <h2>welcome back</h2>
        <p>create new account get get free course for one month from biruh tech</p>
        </div>
      </section>
       <section  class="account">
      <section class="create-account">
        <h2>Login</h2>
        <p>fulfill all required <span>*</span> fields</p>
        <div class="dive"></div>
        <label for="text">Email <span>*</span></label><br><input type="text" placeholder="Enter Your Email"><br>
        <label for="text">password <span>*</span></label><br><input type="text" placeholder="Enter Your password"><br>
       <a href=""> <button>Register</button></a>
       <h2 class="login">Don't have an account ? <a href="register.php">   Register</a></h2><br>
       <h2 class="forget"><a class="forget-a" href="">Forget Password</a></h2>

      </section>
    </section>
       <!--footer-->
       <?php
        include 'footer.php';
        ?>
</body>
</html>