<?php 

  //define the config
  define('_CONFIG_', true);

  //require the config
  require_once "inc/config.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
    </head>
    <body>
      <div class="uk-section uk-container">
        <?php echo "Hello World! Today is: ";
              echo date("Y m d");
        ?> 
        <p>
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
        </p>   
        
      </div>
      <?php require_once "inc/footer.php"; ?>
    </body>
</html>


