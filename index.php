<?php
include("baglanti.php");
include("giris.php");
include("kayit.php");
 ?>
<!-- ----------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/69ca99f89c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
   
    <title>TiklaGit</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" method="POST"  class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="kullaniciadi" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="password" name="parola" placeholder="Password" />
            </div>
            <input type="submit" value="Login" name="giris" class="btn solid" />
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
          <form action="#" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="kullaniciadi" placeholder="Username" />
              <!-- <div id="validationServer04Feedback" class="invalid-feedback">
      şifre  hatası
    </div> -->
    <div>
      <?php
          echo $nameErr;
      ?>
    </div>
   
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
              <!-- <div id="validationServer04Feedback" class="invalid-feedback">
      şifre  hatası
    </div> -->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="parola"  placeholder="Password" />
              <!-- <div id="validationServer04Feedback" class="invalid-feedback">
      şifre  hatası
    </div> -->
            </div>
            <input type="submit" class="btn" name="kayıt" value="Sign up" />
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

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Ready to join our community? Sign up to stay updated!</h3>
            <p>
                Join our community to get exclusive updates, offers, and insider content. Be the first to know about our latest products, special promotions, and more! Sign up now and stay connected.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Welcome back!</h3>
            <p>
                Sign in to access your account, manage your bookings, and stay updated on the latest TiklaGit
                 news. Whether you’re a rider or driver, your hub for exclusive offers and personalized features awaits.
            </p>
            <button class="btn transparent" id="sign-in-btn">
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