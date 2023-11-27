<?php

function connect(){
  $servername = "localhost";
  $username = "webshop_rogier";
  $password = "webshoprogier";
  $DBName = "rogiers_webshop";

  $conn = mysqli_connect($servername, $username, $password, $DBName);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  return $conn;
}

function disconnect($conn){
  mysqli_close($conn);
}
      
function emailExists($email){
  $conn = connect();
  $email = mysqli_real_escape_string($conn, $email);
  $emails = mysqli_query($conn, 'SELECT email FROM users WHERE email = "'.$email.'"');
  $exists = false;
  if (mysqli_fetch_assoc($emails) !== NULL){
    $exists = true;
  }
  disconnect($conn);
  return $exists;
}

function getName($email){
  $conn = connect();
  $email = mysqli_real_escape_string($conn, $email);
  $name = mysqli_query($conn, 'SELECT name FROM users WHERE email = "'.$email.'"');
  disconnect($conn);
  return mysqli_fetch_assoc($name)['name'];
}

function getPass($email){
  $conn = connect();
  $email = mysqli_real_escape_string($conn, $email);
  $rightPass = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT password FROM users WHERE email = "'.$email.'"'))['password'];
  disconnect($conn);
  return $rightPass;
}

function getID($email){
  $conn = connect();
  $email = mysqli_real_escape_string($conn, $email);
  $id = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT id FROM users WHERE email = "'.$email.'"'))['id'];
  disconnect($conn);
  return $id;
}

function getProductInfo($id){
  $conn = connect();
  $productInfo = mysqli_fetch_array(mysqli_query($conn, 'SELECT * FROM products WHERE id = '.$id));
  disconnect($conn);
  return $productInfo;
}

function dataWrite($email, $name, $password){
  $conn = connect();
  $email = mysqli_real_escape_string($conn, $email);
  $name = mysqli_real_escape_string($conn, $name);
  $password = mysqli_real_escape_string($conn, $password);
  mysqli_query($conn, 'INSERT INTO users (email, name, password) VALUES("'.$email.'", "'.$name.'", "'.$password.'")');
  disconnect($conn);
}

function placeOrder($user, $cart){
  $conn = connect();
  mysqli_query($conn, 'INSERT INTO orders (user_id) VALUES("'. $user['id']. '")');
  $orderInfo = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT id FROM orders WHERE id = (SELECT MAX(id) FROM orders)'));
  $id = $orderInfo['id'];
  disconnect($conn);
  return($id);
}

function placeOrderLine($productID, $number, $orderID){
  $conn = connect();
  mysqli_query($conn, 'INSERT INTO order_lines (order_id, product_id,  count) VALUES("'. $orderID.'", "'
              .$productID.'", "'.$number.'")');
  disconnect($conn);
}
      
?>