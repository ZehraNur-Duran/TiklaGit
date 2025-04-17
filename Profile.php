<?php 
include("../baglanti.php");

session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="Home.css">
</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
        <a href="index.html"><img src="./img/log.png" class="logo" alt=""></a>
      <h3 class="hide">TiklaGit</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="Profile.php"  class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Profile</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="publish.php"  data-active="1">
            <div class="icon">
              <i class='bx bx-folder'></i>
              <i class='bx bxs-folder'></i>
            </div>
            <span class="link hide">Publish a ride</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="massage.html" data-active="2">
            <div class="icon">
              <i class='bx bx-message-square-detail'></i>
              <i class='bx bxs-message-square-detail'></i>
            </div>
            <span class="link hide">Messages</span>
          </a>
        </li>
        
        </li>
        <div class="tooltip">
          <span class="show">Profile</span>
          <span>Publish a ride</span>
          <span>Messages</span>
        </div>
      </ul>

      

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" data-active="4">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="5">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Help</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="Setting.html" data-active="6">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Settings</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Tasks</span>
          <span>Help</span>
          <span>Settings</span>
        </div>
      </ul>
    </div>

    <div class="sidebar-footer">
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/User.jpg" alt="">
          <div class="admin-info">
            <h3>User</h3>
            <h5>Admin</h5>
          </div>
        </div>
        <a href="cikis.php" name="cıkıss" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show">User</span>
        <span>Logout</span>
      </div>
    </div>
  </nav>


  <main>
    <div class="profile-form">
      <span class="circle one"></span>
      <span class="circle two"></span>

      <div class="profile-container">
        <div class="photo-section">
          <img src="img/User.jpg" alt="Profile Photo" class="profile-photo">
          <button class="edit-btn">Edit</button>
        </div>
        <h2>Profile</h2>
        <p>Update your photo and personal details</p>
        <div class="profile-card">
         
          <form class="profile-form">
            <div class="form-row">
             <div class="form-group">
             <label for="full-name">Name</label>
              <!--<label for="full-name">Name</label>-->
               <input type="text" id="sehir" id="full-name" placeholder="Your First Name">
               <!--<label for="nick-name">Last Name</label>-->
               <input type="text"  id ="sehir"id="nick-name" placeholder="Your Last Name">
            
              
              </div>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select id="gender" class="yolcu">
                <option value="" disabled selected>Choose</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" id="country" placeholder="Your Country">
            </div>
            <div class="form-group">
              <label for="birthday">Birthday</label>
              <input type="date" id="birthday">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" id="address" placeholder="Your Address">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" id="city" placeholder="Your City">
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <select id="language" class="yolcu">
                <option value="" disabled selected>Choose</option>
                <option value="english">English</option>
                <option value="spanish">Spanish</option>
              </select>
            </div>
            
            <button type="submit" class="save-btn">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


   

  
    <p class="copyright">
      &copy; 2021 - <span>TiklaGit</span> All Rights Reserved.
    </p>
  </main>
  <script src="apps.js"></script>
  <script src="Home.js"></script>
</body>

</html>