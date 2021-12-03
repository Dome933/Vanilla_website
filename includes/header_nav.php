<?php 
  session_start();
?>
<!-- Start login session here to be automatically included on every page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="js/html5shiv.min.js"></script>
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/project_content.css">
  <link rel="stylesheet" href="style/home_content.css">
  <link rel="stylesheet" href="style/about_impres.css">
  <link rel="stylesheet" href="style/sign_log.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/login_signup_check.js"></script>
  <title>.df Digital Solutions</title>
</head>
<body>
<!-- Header Section -->
<div id="wrapper">
  <header>
    <?php
    // Check for active page to show subpage name in h1
    $page = basename($_SERVER['PHP_SELF']);
      if(strpos($page, "project") !== false){
        echo '<h1><a href="index.php">.df Digital Soutions</a> <span>- Projects</span></h1>';
      } 
      else if (strpos($page, "about") !== false) {
        echo '<h1><a href="index.php">.df Digital Soutions</a> <span>- About Us</span></h1>';
      }
      else if (strpos($page, "impressum") !== false) {
        echo '<h1><a href="index.php">.df Digital Soutions</a> <span>- Impressum</span></h1>';
      }
      else if (strpos($page, "log_in") !== false) {
        echo '<h1><a href="index.php">.df Digital Soutions</a> <span>- Log In</span></h1>';
      }
      else if (strpos($page, "sign_up") !== false) {
        echo '<h1><a href="index.php">.df Digital Soutions</a> <span>- Sign Up</span></h1>';
      }
      else{
        echo '<h1><a href="index.php">.df Digital Soutions</a></h1>';
      }
    ?>
    <nav>
      <ul>
        <?php
          // Check for .active
          $page = basename($_SERVER['PHP_SELF']);
          if(strpos($page, "about") !== false){
            echo '<li><a class="active" href="about_us.php">about us</a></li>';
          } else{
            echo '<li><a href="about_us.php">about us</a></li>';
          }
          if(strpos($page, "project") !== false){
            echo '<li><a class="active" href="project.php">projects</a></li>';
          } else{
            echo '<li><a href="project.php">projects</a></li>';
          }
        ?>
      </ul>
    </nav>

    <div class="header_img" id="display"><img src="style/img/code.png" alt="Code"></div>
    <div class="header_img" id="display"><img src="style/img/design.png" alt="Design"></div>
    <div class="header_img" ><img src="style/img/seo.png" alt="SEO"></div>
  </header>
