<?php

function showMoreProductInfo($productInfo){
  echo '<p><h4 class = "id">'.$productInfo['id'].'</h4><br><img src="Images/'.$productInfo['imageName'].'", height = 400, width = 600 >'.
  '</h4><br><h3 class = "name">'.$productInfo['name'].'</h3><br><h4 class = "price">'.$productInfo['price'].
  '</h4><br>'.$productInfo['description'].'</h4></p><br><br>';
}

?>