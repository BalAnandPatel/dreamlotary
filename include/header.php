<?php 
include "constant.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dream Lottery </title>

    <script src="https://kit.fontawesome.com/5220a54d1d.js" crossorigin="anonymous"></script>

  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style2.css">

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>

    <div class="containerc" style="justify-content: center; display: flex;">
      <img src="images/bann.png" width="100%">
    </div>

    <header class="header_section">
      <div class="containerc">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <!-- <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" width="50px" height="50px">
            <span style="align-items: center;">
              Dream Lottery 
            </span>
          </a> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center" style="width: 100%; justify-content: center; display: flex;">
              <ul class="navbar-nav" style="background-color: green;">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"> Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
              <!--   <li class="nav-item">
                  <a class="nav-link" href="play.php"> Play Online </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="results.php"> Result </a>
                </li>
                <!--   <li class="nav-item">
                    <a class="nav-link" href="check-numbers.php"> Check Tickets </a>
                  </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="ticket-generator.php"> Ticket Generator </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="information.php"> Information </a>
                    <div class="dropdown-content">
                      <a href="how-to-play.php">How to Play</a><br><br>
                      <a href="prizes.php">Prizes</a><br><br>
                      <a href="how-to-claim-prizes.php">How to Claim</a><br><br>
                      <a href="faq.php">FAQ</a><br><br>
                      <a href="rules.php">Rules</a><br><br>
                      <a href="competitions.php">Competitions</a><br><br>
                      <a href="hot-and-cold-numbers.php">Statics</a>
                    </div>
                </li>
            <!--     <li class="nav-item">
                  <a class="nav-link" href="bumper-draw.php"> Bumper Draws </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="winners_list.php"> Winners </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="payment.php"> Payment </a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="lottery.php">Lottery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="goLogin().target='_blank';" href="#"><i class="fa-solid fa-user"></i> Login </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    
    <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  text-align: center;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
