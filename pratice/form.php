<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'user_validation.php';

    if(isset($_POST['submit'])){
        // validate entries
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();
    }


?>


<html lang="en">
    <head>
        <title>PHP OOP TUTORIAL</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="new-user">
        <h2>CREATE A NEW USER</h2>

        <!-- 
        <?php echo $_SERVER['PHP_SELF']; ?> means that when the submit button is pressed/clicked, 
        the form will be submitted to this same file (i.e., the current PHP file at the top) for processing. 
        -->

        <form action="<?php  echo $_SERVER['PHP_SELF']  ?>" method="POST">  

            <label>Username:</label>
            <input type="text" name="username" value=" <?php !empty($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?> ">
            <div class="error"> <?php echo $errors['username'] ?? '' ?></div>
        
            <label>Email</label>
            <input type="text" name="email" value=" <?php !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?> ">
            <div class="error"> <?php echo $errors['email'] ?? '' ?></div>
  
            <input type="submit" name="submit" value="submit" class="">
     
        </form>
        </div>
    </body>

</html>