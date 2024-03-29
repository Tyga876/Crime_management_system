<?php

include_once 'includes/session.php'

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/site.css" />
    
    <title>Crime Registration form - <?php echo $title ?></title>
    
    
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">


    <img src="img/logo.png" alt="logo"  width="45" height="45">

    

      <a class="navbar-brand" href="index.php">Click to add criminal or suspect </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="faqs.php">FAQs </a>
          <a class="nav-item nav-link active" href="History.php">History </a>
          <a class="nav-item nav-link" href="viewrecords.php">View Criminals</a>
          

          </div>
          <div class="navbar-nav ml-auto">
          <!-- prevent users from seeing the login button whilst they are logged in -->
          <?php
              if(!isset( $_SESSION['userid'])){                
              
          ?>
          <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
        <?php }else{ ?>
         
             <!-- they see logout instead -->
          <a class="nav-item nav-link" href="#"><span> hello <?php echo  $_SESSION['username'] ?> ! </span><span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      <?php  } ?>
        </div>
      </div>
    </nav>
    <br/>