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
  $name = mysqli_query($conn, 'SELECT name FROM users WHERE email = "'.$email.'"');
  disconnect($conn);
  return mysqli_fetch_assoc($name)['name'];
}

function getPass($email){
  $conn = connect();
  var_dump( mysqli_query($conn, 'SELECT password FROM users WHERE email = "'.$email.'"'));
  $rightPass = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT password FROM users WHERE email = "'.$email.'"'))['password'];
  disconnect($conn);
  return $rightPass;
}

function validLogin($email, $password, $errs){
  $conn = connect();
  disconnect($conn);
  if (!emailExists($email)){
    $errs[$email] = 'Er is geen account geassociëerd met dit e-mailadres.';
    return $errs;
  } else {
    $rightPass = getPass($email);
    if ($password == $rightPass){
      return($errs);
    }
  }
  $errs['password'] = 'Onjuist wachtwoord.';
  return $errs;
}

function dataWrite($inputs){
  $conn = connect();
  mysqli_query($conn, 'INSERT INTO users (email, name, password) VALUES("'.$inputs['email'].'", "'.$inputs['name'].'", "'.$inputs['password'].'")');
  disconnect($conn);
}
      
?>