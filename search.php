<!DOCTYPE html>
<script>
  animateMe('burger-menu');
</script>
<html>

<?php 
   include('header.php');
    if (isset($_GET['q'])) {
        $q = $_GET['q']; 
        $searchQuery = strtolower($q);
        $query = "SELECT product_name, grade FROM product_ingredient, product WHERE pi_ingredient = '$searchQuery' AND product.product_name=product_ingredient.pi_product GROUP BY  product.grade";
       $result = mysqli_query($db, $query);
      //  $products = ;
       while($row = mysqli_fetch_assoc($result)) {
         echo 
         '
         <a href="./product-details.php?prod='.$row['product_name'].'"> 
         <div class="product-border-'.strtoupper($row['grade']).'">
            <div class="product-border-container"> 
              <div style="display: inline-block; width:  15%; margin-right: 45px; vertical-align: middle;">
                <h1 class="stema-letters-inner"> <span class="stema-letters-inner" style="padding-left: 25px; color: var(--'.strtolower($row['grade']).'); "> '.strtoupper($row['grade']).' </span> </h1>
              </div>
              <div class="search-product"> 
                <h2 class="sp-desc"> '.ucfirst($row['product_name']).' </h2>

                <div class="sp-desc-right"> '.ucfirst('dadjwaidwaijdawdjiaw').'
                </div>
              </div>
         </div>
            </div>
            </a>  ';
    }      
      
      }
?>