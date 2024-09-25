<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

    if(isset($_POST['submit'])){
        echo "form submitted";
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
            <input type="text" name="username" value="">
        
            <label>Email</label>
            <input type="text" name="email" value="">
  
            <input type="submit" name="submit" value="submit" class="">
     
        </form>
        </div>
    </body>

</html>