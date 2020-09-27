<?php include('./header.php');
$user = $_SESSION['username'];
$user_id_query = "SELECT id from users WHERE username= '$user' ORDER BY created DESC LIMIT 50";
$user_id_result = mysqli_query($db, $user_id_query);
$user = mysqli_fetch_assoc($user_id_result);
$userId = $user['id'];

    $query = "SELECT * FROM user_history WHERE userId = '$userId' ";
    $results = mysqli_query($db, $query);
    // $history = mysqli_fetch_assoc($results);
    ?>

        <?php
        echo ' 
        <div style="
        height: 80vh;
        overflow-y: scroll;
        "> 
        <div class="user-history-title"> 
         <div style="width:40%; display: inline-block;"> <h1> Date Visited </h2>   </div>  
         <div style="width:55%; display: inline-block;"> <h1> Product </h1>   </div> 
        </div>
        '; ?>
        

     <?php while($row = mysqli_fetch_assoc($results)){
        echo '
      <a href="./product-details.php?prod='.$row['productName'].' " >  <div class="user-history-product"> 
         <div style="width:40%; display: inline-block; text-align: center;"> <h2> '.substr($row['created'], 0, -3 ).' </h2>   </div>  
         <div style="width:55%; display: inline-block; text-align: center;"> <h2> '.ucfirst($row['productName']).' </h2>   </div> 
        </div> <a>
        ';
    }

        echo '</div>';



     ?>

