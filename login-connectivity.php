<?php
  include 'connect.php';
  session_start();
  // Below code is (if you are not logged in then u cannot go to the homepage)
    if(!isset($_SESSION['username'])){
      header('location:login.php');
      // $_SESSION['username']='Login Here';
    }
?>