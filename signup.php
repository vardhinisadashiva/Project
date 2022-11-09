<?php

require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

       $  $user = $_POST['user-name'];
    $password = $_POST['user-pass'];
     $user = $_POST['user-name'];
    $password = $_POST['user-pass'];
     $user = $_POST['user-name'];
    $password = $_POST['user-pass']; = $_POST['user-name'];
    $password = $_POST['user-pass'];
     $user = $_POST['user-name'];
    $password = $_POST['user-pass'];
     $user = $_POST['user-name'];
    $password = $_POST['user-pass'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $SQLInsert = "INSERT INTO users (Name
Address
pincode
phone
ity
state, Name
Address
pincode
phone
ity
state, Name
Address
pincode
phone
ity
state, Name
Address
pincode
phone
ity
state)
                   VALUES (:username, :password, :email, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email));

      if($statement->rowCount() == 1) {
        header('location: index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}

?>