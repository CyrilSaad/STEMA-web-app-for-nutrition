

<head>
  <title>Stema</title>
  <link rel="stylesheet" href="../styles.css">
  <script type="text/javascript" src="../script.js"></script>  

  <meta name="viewport" content="initial-scale=1.0, width=device-width">
</head> 
<body>
<?php
      include('header.php');
    $arr = [
      "a"=> " A - Absence of sugars, salt, lipids",
      "b"=> " B - No or little of sugars, salt, lipids",
      "c"=> " C - Little quantity of sugars, salt, lipids",
      "d"=> " D - Little quantity of sugars, salt, lipids",
      "e"=> " E - Considerable of sugars, salt, lipids",
    ];
    $user = $_SESSION['username'];
 
    $productName = $_GET["prod"];
    $query = "SELECT * FROM product WHERE product_name = '$productName'";
    $result = mysqli_query($db, $query);
    $product = mysqli_fetch_assoc($result);

    $query2 = "SELECT id from users WHERE username= '$user' ";
    $result2 = mysqli_query($db, $query2);
    $user = mysqli_fetch_assoc($result2);
    $userId = $user['id'];
    
    $query3 = "SELECT * FROM user_history WHERE userId = '$userId' AND productName='$productName'";
    $checkIsUnique = mysqli_query($db, $query3);
    $isUnique = mysqli_fetch_assoc($checkIsUnique);


    if( !$isUnique) {
      $addToHistoryQuery = "INSERT INTO user_history(userId, productName) VALUES('$userId', '$productName')";
      $addToHistory = mysqli_query($db, $addToHistoryQuery);
    } 
    elseif ( $isUnique ) {
      $addToHistoryQuery = "UPDATE user_history SET productName='$productName' WHERE userId = '$userId' AND productName='$productName'";
      $addToHistory = mysqli_query($db, $addToHistoryQuery);
    }
?>  

<div class="product-details-header-<?php echo strtoupper($product['grade'])?>">
 <div class="product-details-title-<?php echo strtoupper($product['grade'])?>"> 
    <h2 class="product-detail-name">  <?php echo strtoupper($product['product_name'])?> </h2>   
    <div class="favorite-icon">
     <form action="favorite-product.php" style="margin:0;"> <button style="background-color:transparent; border:none; cursor: pointer;"> <img src="./images/heart-empty.png" alt="">  </button> </form> 
    </div>
  </div>
  </div>
  <div class="product-image" >  <?php echo '<img alt="" id="image-1" src="data:image/jpeg;base64,'.base64_encode( $product['image_1'] ).'"/>'; ?>  
  <?php echo '<img alt="" id="image-2" style="display: none" src="data:image/jpeg;base64,'.base64_encode( $product['image_2'] ).'"/>'; ?>  
  <?php echo '<img alt="" id="image-3" style="display: none" src="data:image/jpeg;base64,'.base64_encode( $product['image_3'] ).'"/>'; ?>  
  <div class="button-slider"> 
  <?php if(isset($product['image_1'])) {
    echo '<button class="image-slider" id="product_image_1" onclick="changeImage(this.id)">  </button>';
  }
  if(isset($product['image_2'])) {
    echo '<button class="image-slider" id="product_image_2"  onclick="changeImage(this.id)">  </button>';
  }

  if(isset($product['image_3'])) {
    echo '<button class="image-slider" id="product_image_2"  onclick="changeImage(this.id)">  </button>';
  }
  ?>
   </div>   
  
  </div>
<div style="width: 95%; margin: 0 auto;">
  <h2 class="product-details-title"> Nutriscore Classification</h2>
  <h3 style="padding-left: 20px;"> <?php echo $arr[strtolower($product['grade'])]; ?></h3>
  <h2 class="product-details-title"> Nutritional Scale</h2>
    <ul class="nutrition-list">

    <?php 
        echo 
        '<li> 
          <h3> Fat/lipids: '.$product['lipids'].'g </h3>
        </li>
        <li> 
        <h3> Saturated fatty acids: '.$product['fattyacids'].'g </h3>
        </li>
        <li> 
        <h3> Sugar: '.$product['sugar'].'g </h3>
        </li>
        <li> 
        <h3> Salt: '.$product['salt'].'g </h3>
        </li>';
    ?>
    <h2 class="product-details-title" > Allergic Contents</h2>

    </ul>
</div>
 </body>