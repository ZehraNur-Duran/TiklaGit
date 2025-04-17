<?php
include("baglanti.php");

?>
<?php
include("kayit.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/69ca99f89c.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="user_style.css" />

    <title>TiklaGit</title>
  </head>
  <body>
    <div class="container0">
      <div class="forms-container0">
        <div class="signin-signup">
          <form action="#" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
          <div class="input-field0">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control 
              <?php 
              if(!empty($input_err2)){
                echo"is-invalid";
              }
              ?>" 
              name="kullaniciadi2" placeholder="Username" />
              <div id="validationServer03Feedback" class="invalid-feedback">
              <?php 
              echo $input_err2;
              ?>
            </div>
          </div>
          <div class="input-field0">
              <i class="fas fa-user"></i>
              <input type="password" class="form-control 
               <?php 
              if(!empty($input_err2)){
                echo"is-invalid";
              }
              ?>" name="parola2" placeholder="Password" />
              <div id="validationServer03Feedback" class="invalid-feedback">
              <?php 
              echo $input_err2;
              ?>    </div>
          </div>
          <input type="submit" value="Login" name="giris" class="btn0 solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
            <!-- ------------------kayıt--------------------- -->
          <form id="kayıt"  method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
          <div class="input-field0">
              <i class="fas fa-user"></i>
              <input type="text" class="form-control 
               <?php 
              if(!empty($input_err)){
                echo"is-invalid";
              }
              ?>" name="kullaniciadi" placeholder="Username" />
              <div id="validationServer03Feedback" class="invalid-feedback">
              <?php 
              echo $input_err;
              ?>
            </div>
          </div>
          <div class="input-field0">
              <i class="fas fa-envelope"></i>
              <input type="email" class="form-control 
               <?php 
              if(!empty($input_err)){
                echo"is-invalid";
              }
              ?>" name="email" placeholder="Email" />
              <div id="validationServer03Feedback" class="invalid-feedback">
              <?php 
              echo $input_err;
              ?>
              </div>
          </div>
          <div class="input-field0">
              <i class="fas fa-lock"></i>
              <input type="password" class="form-control 
               <?php 
              if(!empty($input_err)){
                echo"is-invalid";
              }
              ?>" name="parola" placeholder="Password" />
              <div id="validationServer03Feedback" class="invalid-feedback">
              <?php 
              echo $input_err;
              ?>
              </div>
          </div>
          <input type="submit" form="kayıt" class="btn0" name="kayıt" value="Sign up" /> 
          
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container0">
        <div class="panel left-panel">
          <div class="content0">
            <h3>Ready to join our community? Sign up to stay updated!</h3>
            <p>
                Join our community to get exclusive updates, offers, and insider content. Be the first to know about our latest products, special promotions, and more! Sign up now and stay connected.
            </p>
            <button class="btn0 transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content0">
            <h3>Welcome back!</h3>
            <p>
                Sign in to access your account, manage your bookings, and stay updated on the latest TiklaGit
                 news. Whether you’re a rider or driver, your hub for exclusive offers and personalized features awaits.
            </p>
            <button class="btn0 transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>


