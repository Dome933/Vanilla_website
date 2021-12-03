
<footer>
<noscript id="noscript">Sorry, but your Browser does not support JavaScript</noscript>
  <ul>
    <?php
      //Check for .active
      $page = basename($_SERVER['PHP_SELF']);
      if(strpos($page, "sign_up") !== false){
        echo '<li><a class="active" href="sign_up.php">Sign Up</a></li>';
      } else{
        echo '<li><a href="sign_up.php">Sign Up</a></li>';
      }

      if(strpos($page, "log_in") !== false){
        echo '<li><a class="active" href="log_in.php">Log In</a></li>';
      } else{
        echo '<li><a href="log_in.php">Log In</a></li>';
      }

      if(strpos($page, "impressum") !== false){
        echo '<li><a class="active" href="impressum.php">Impressum</a></li>';
      } else {
        echo '<li><a href="impressum.php">Impressum</a></li>';
      }

    ?>
  </ul>

</footer>

</div>
</body>
</html>