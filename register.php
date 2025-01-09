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
        <h2>create New Account</h2>
        <p>create new account get get free course for one month from biruh tech</p>
        </div>
      </section>
       <section  class="account">
      <section class="create-account">
        <h2>Register</h2>
        <p>fulfill all required <span>*</span> fields</p>
        <div class="dive"></div>
        <label for="text">Email <span>*</span></label><br><input type="text" placeholder="Enter Your Email"><br>
        <label for="text">user name <span>*</span></label><br><input type="text" placeholder="Enter Your user name"><br>
        <label for="text">password <span>*</span></label><br><input type="text" placeholder="Enter Your password"><br>
        <label for="text">Confirm password <span>*</span></label><br><input type="text" placeholder="Enter again password"><br>
       <a href=""> <button>Register</button></a>
       <h2 class="login">I have an account <a href="login.php">   Login</a></h2>
      </section>
    </section>
       <!--footer-->
       <?php
        include 'footer.php';
        ?>
</body>
</html>