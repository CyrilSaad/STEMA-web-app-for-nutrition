<!DOCTYPE html>
<script>
  animateMe('burger-menu');
</script>
<html>
<head>
  <title>Stema</title>
  <link rel="stylesheet" href="styles.css">
  <script type="text/javascript" src="script.js"></script>  

  <meta name="viewport" content="initial-scale=1.0, width=device-width">
</head>

<?php include('login.php') ?>
<body>

<div class="frame">


    <div class="header">
        <div class="header-burger-menu">
          <a href="#" onclick ="showMenu();">
            <img src="./images/burger-menu.png">
          </a>
        </div>
          
               
        <div class= "hm-page-header-stema">
          <img src="./images/Stema-in-header.png">
        </div>
      </div>
      <!-- end of header -->

      <div class="toggle-menu" id="burger-menu">
          <div class="burger-menu-img">
            <img src="images/burger menu icons/immage.png">
          </div>

        <ul class="menu-list">
            
            <?php if (isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
                echo'
                <li>
                <div class="menu-icon">
                  <img src="images/burger menu icons/myprof.png">
                </div>
                  <div class="menu-item">
                    My Profile
                  </div>
              </li>

          <li>
            <div class="menu-icon">
              <img src="images/burger menu icons/my-favorites.png">
            </div>
              <div class="menu-item">
                My Favorites
              </div>
          </li>
         
          <li>
          <div class="menu-icon">
            <img src="images/burger menu icons/hirtory.png">
          </div>
            <div class="menu-item">
              History
            </div>
        </li>';
          }  ?>
        
        <?php if (!isset($_SESSION['username']) && !isset($_SESSION['loggedin'])) {
                echo'<li>
                <a href="./log-in.html">
                <div class="menu-icon">
              <img src="images/burger menu icons/log-in.png">
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
              <img src="images/burger menu icons/Additives.png">
            </div>
              <div class="menu-item">
               Additives
              </div>
          </li>

          <li>
            <div class="menu-icon">
              <img src="images/burger menu icons/info.png">
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
              <img src="images/burger menu icons/log-in.png">
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
          <img src="./images/search-icon.png" alt="">
          <input type="text" placeholder="Start typing..." class="hm-page-searchbar" >
          <img src="./images/scan-image.png" alt="">
  </div>

    <div class="hm-page-ns-logo">

      <div>
        <img src="./images/nutriscore-logo-home-page.png" alt="">
      </div>
      
      
      <div class="ns-logo-desc">
        <div class="ns-logo-index" style="color: #038100"> <span class="stema-letters"> 
          A - </span> <div class="ns-logo-desc-info"> Absence of <br> sugars, salt, lipclasss  </div>
        </div>

        <div class="ns-logo-index" style="color: #85BB2F">
           <span class="stema-letters"> B - </span>  <div class="ns-logo-desc-info">No or little of <br> sugars, salt, lipclasss   </div>        
          </div>

        <div class="ns-logo-index" style="color: #fecb02"> <span class="stema-letters">
           C - </span> <div class="ns-logo-desc-info"> Little quantity of <br> sugars, salt, lipclasss  </div>
        </div>

        <div class="ns-logo-index" style="color: #ee8100">
           <span class="stema-letters"> D -</span>  <div class="ns-logo-desc-info"> Consclasserable of b<br> sugars, salt, lipclasss  </div>
           </div>

        <div class="ns-logo-index" style="color: #e63e11">
          <span class="stema-letters"> E -</span> <div class="ns-logo-desc-info"> Extensive amount of b<br> sugars, salt, lipids</div>
        </div>
      
    </div>
</body>

</div> <!--  end of page -->
</html>
