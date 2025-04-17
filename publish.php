<?php 
include("yayınla.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publish a ride</title>
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
          <a href="Profile.php" class="active" data-active="0">
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
          <a href="#" data-active="3">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="4">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Help</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="Setting.html" data-active="5">
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
<!-- adminnnnn -->
        <div class="admin-profile hide">
          <img src="./img/User.jpg" alt="">
          <div class="admin-info">
            <h3>User</h3>
            <h5>Admin</h5>
          </div>
        </div>
        <a href="index.html" class="log-out">
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

        <h2>Publish a ride</h2>
        <p>Please complete empty box</p>
        <div class="profile-card">
         
          <form method="post" class="profile-form">
            <div class="form-row">
             <div class="form-group">
               <label for="full-name">Leaving </label>
               <select name="il" id="il" class="sehir"></select>
               <select id="ilce" name="ilce" class="sehir"></select>
               
               <label for="nick-name">Going to</label>
               <select name="il-go" id="il-go" class="sehir"></select>
               <select id="ilce-go" name="ilce-go" class="sehir"></select>
              </div>
            </div>
           
            <div class="form-group">
              <label for="country">car's number</label>
              <input type="text" name="plaka" id="country" placeholder="Your car number">
            </div>
            <div class="form-group">
              <label for="birthday">Day time</label>
              <input type="date" id="birthday" name="tarih">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="adres" id="address" placeholder="Your Address">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <label for="city">Price</label>
              <input type="text" name="fiyat" id="city" placeholder="price(TL)">
            </div>
            <div class="form-group">
              <label for="language">How many passengere?</label>
              <select name="yolcu" id="language" class="yolcu">
                <option value="" disabled selected>Choose</option>
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
              </select>
            </div>
            
            <button type="submit" name="save" class="save-btn">Save</button>
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
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 

  <script type="text/javascript">
    $.getJSON("tr-il.json", function(sonuc){
        $.each(sonuc, function(index, value){
            var row="";
            row +='<option name="ildeneme" value="'+value.il_adi+'">'+value.il_adi+'</option>';
            $("#il").append(row);
        })
    });

    $.getJSON("tr-ilce.json", function(sonuc){
            $.each(sonuc, function(index, value){
                var row="";
                    row +='<option value="'+value.ilce_adi+'">'+value.ilce_adi+'</option>';
                    $("#ilce").append(row);
            });
        });

    $("#il").on("change", function(){
        var il=$(this).val();
        $("#ilce").html("");
        $.getJSON("tr-ilce.json", function(sonuc){
            $.each(sonuc, function(index, value){
                var row="";
                if(value.il_adi==il)
                { 
                    row +='<option value="'+value.ilce_adi+'">'+value.ilce_adi+'</option>';
                    $("#ilce").append(row); 
                } 
            });
        });
    });
</script>
  <!-- varış noktası  -->
<script type="text/javascript">
    $.getJSON("tr-il.json", function(sonuc){
        $.each(sonuc, function(index, value){
            var row="";
            row +='<option value="'+value.il_adi+'">'+value.il_adi+'</option>';
            $("#il-go").append(row);
        })
    });

    $.getJSON("tr-ilce.json", function(sonuc){
            $.each(sonuc, function(index, value){
                var row="";
                    row +='<option value="'+value.ilce_adi+'">'+value.ilce_adi+'</option>';
                    $("#ilce-go").append(row);
            });
        });

    $("#il-go").on("change", function(){
        var il=$(this).val();
        $("#ilce-go").html("");
        $.getJSON("tr-ilce.json", function(sonuc){
            $.each(sonuc, function(index, value){
                var row="";
                if(value.il_adi==il)
                { 
                    row +='<option value="'+value.ilce_adi+'">'+value.ilce_adi+'</option>';
                    $("#ilce-go").append(row); 
                } 
            });
        });
    });
</script>

  <script src="apps.js"></script>
  <script src="Home.js"></script>
</body>

</html>