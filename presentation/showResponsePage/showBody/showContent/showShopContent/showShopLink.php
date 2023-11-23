<?php

function showShopLink($x, $inCart, $message){
  echo '<li><a href="index.php?page=details&id='.strval($x).'&inCart='.$inCart.'">'.$message.'</a></li>';
}

?>