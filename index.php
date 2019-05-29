<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
      <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
          <form class="uk-form-stacked js-login">

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
    </body>
</html>
