<?php session_start();?>

<!DOCTYPE html>
<html>

    <head>
    <script src="functions.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <link href="style2.css" rel="stylesheet" type="text/css">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          
        <div class="logo">
            <img src="images/bike_logo.png" width="40" height="40" alt="BKB LOGO">
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <div class="navbar">
              <li class="nav-home">
                <a class="nav-link" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-gallery">
                <a class="nav-link" href="gallery.php">GALLERY</a>
              </li>
              <li class="nav-localarea">
                <a class="nav-link" href="localarea.php">LOCAL AREA</a>
              </li>
              <li class="nav-shop dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    SHOP
                  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="shop.php">BUY</a></li>
                  <li><a class="dropdown-item" href="hire.php">HIRE</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="offers.php">SPECIAL OFFERS</a></li>
                </ul>
              </li>
              <li class="nav-contact">
                <a class="nav-link" href="contact.php">SIGN UP</a>
              </li>

              <?php
                        if(isset($_SESSION['login'])){
                          echo'<a class="nav-link" href="logout.php">Logout</a>';
                        }
                      ?>
              </div>

            </ul>
          </div>
          
        </div>
      </nav>
