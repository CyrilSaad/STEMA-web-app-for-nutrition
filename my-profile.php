<?php include('./header.php');
    $username =  $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username ='$username'";
    $results = mysqli_query($db, $query);
    $result = mysqli_fetch_assoc($results);
?>


<body>
    
    <div class="center-screen">
        
        <div class="log-in-form">
      <div class="log-in-header">
      <h1> My Profile </h1>
    </div>

    <div class="log-in-user-info" style="margin-top:10px;">
        <form  method="post" onsubmit="return validateSignUp();" action="update-profile.php">
        <input type="text"  name="username" maxlength="20" placeholder="Username" value="<?php echo $_SESSION['username']; ?>" > <br>
        <input type="email" readonly name="email" maxlength="20" value="<?php echo $result['email'] ?>" style="opacity:0.5;"> <br>
        <input type="password" maxlength="20" placeholder="Old Password" id="password_old" name="password_old">  <br>
        <input type="password" maxlength="20" placeholder="Password" id="pass" name="password_1">  <br>
        <div id="passErr">Passwords do not match </div>
        <input type="password" maxlength="20" placeholder="Confirm Password" id="confirmPass" name="password_2">  <br>
      
  
      <input type="submit" class="log-in-submit" value="Update Profile" name="update_user">
    </form> 

    
    </div>
    
   
  
   </div>
  </div>
</body>

