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
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
          <form class="uk-form-stacked js-login">
            <h2>Login</h2>
            
            <div class="uk-margin">
              <label class="uk-form-label" for="uk-form-stacked-text">Email</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="uk-form-stacked-text" type="email" required="required" placeholder="email@email.com"> 
              </div>
            </div>

             <div class="uk-margin">
              <label class="uk-form-label" for="uk-form-stacked-text">Password</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="uk-form-stacked-text" type="password" required="required" placeholder="Your Password"> 
              </div>
            </div>  

            <div class="uk-margin">
              <button class="uk-button uk-button-default" type="submit">Login</button>
              </div>
            </div>                     
            
          </form>          
        </div>
      </div>
      <?php require_once "inc/footer.php"; ?>
    </body>
</html>
