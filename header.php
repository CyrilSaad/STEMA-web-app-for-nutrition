<!DOCTYPE html>
<script>
  animateMe('burger-menu');
</script>
<html>
<head>
  <title>Stema</title>
  <link rel="stylesheet" href="./styles.css">
  <script type="text/javascript" src="script.js"></script>  

  <meta name="viewport" content="initial-scale=1.0, width=device-width">
</head> 

<?php include('login.php'); ?>
<body>

<div class="frame">


    <div class="header">
        <div class="header-burger-menu">
          <a href="#" onclick ="showMenu();">
            <img src="./images/burger-menu.png">
          </a>
        </div>
          
               
        <div class= "hm-page-header-stema">
         <a href="/stema"><img src="./images/Stema-in-header.png"></a> 
        </div>
      </div>
      <!-- end of header -->

      <div class="toggle-menu" id="burger-menu">
          <div class="burger-menu-img">
            <img src="./images/burger menu icons/immage.png">
          </div>

        <ul class="menu-list">
            
            <?php if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
                echo'
                <li>
              <a href="my-profile.php"> <div class="menu-icon">
                  <img src="./images/burger menu icons/myprof.png">
                </div>
                  <div class="menu-item">
                    My Profile
                  </div> </a> 
              </li>

          <li>
            <div class="menu-icon">
              <img src="./images/burger menu icons/my-favorites.png">
            </div>
              <div class="menu-item">
                My Favorites
              </div>
          </li>
         
          <li>
          <div class="menu-icon">
            <img src="./images/burger menu icons/hirtory.png">
          </div>
          <a href="./history.php">
          <div class="menu-item">
            History
          </div>
          </a>
        </li>';
          }  ?>
        
        <?php if (  !(isset($_SESSION['username']) && isset($_SESSION['loggedin']) )) {
                echo'<li>
                <a href="./log-in.html">
                <div class="menu-icon">
              <img src="./images/burger menu icons/log-in.png">
            </div>
              <div class="menu-item">
                Log In
              </div>
              </a>
          </li>'
          ;
          }  ?>
         

          <li>
            <div class="menu-icon">
              <img src="./images/burger menu icons/Additives.png">
            </div>
              <div class="menu-item">
               Additives
              </div>
          </li>

          <li>
            <div class="menu-icon">
              <img src="./images/burger menu icons/info.png">
            </div>
              <div class="menu-item">
                Info
              </div>
          </li>

          <?php if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
                echo'
                <li>
                <a href="./log-out.php">
                <div class="menu-icon">
              <img src="./images/burger menu icons/log-in.png">
            </div>
              <div class="menu-item">
                Log Out
              </div>
              </a>
          </li>';
          }  ?>

        </ul>   

      </div>


      <div class="hm-page-search">
         <form onSubmit="search.php" method="get" style="width:100%; margin-bottom: 10px; display: flex;">
          <button  formaction="search.php" style="background-color:#fff; border:none;"> <img src="./images/search-icon.png" alt=""> </button>
          <input type="search" name="q" placeholder="Search..." class="hm-page-searchbar" onsearch="search.php?">
          <img src="./images/scan-image.png" style="float:right;">
          </form>
  </div>