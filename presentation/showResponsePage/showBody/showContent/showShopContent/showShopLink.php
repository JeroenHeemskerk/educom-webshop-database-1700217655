<?php

function showShopLink($x, $inCart, $message){
  echo '<li><a href="index.php?page=details&id='.$x.'&inCart = '.$inCart.'">'.$message.'</a></li>';
}

?>