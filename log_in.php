
 <!-- Header Section -->
 <?php require 'includes/header_nav.php';?>
  <!-- Header Section -->

  <main id="content">
  <!-- Checks if user is logged in or not and shows different data according to that-->
  <?php
    if(!isset($_SESSION['userID'])){
      echo '
      <div id="wrapper_log_in">
      <h2>Log in!</h2>';
      
        if (isset($_GET['error'])) {
          // Check for empty fields error
            if($_GET['error'] == "empty"){
              echo '<p class="error">Fill in all fields!</p>';
            }
            else if($_GET['error'] == "email"){
              echo '<p class="error">Please enter a valid e-mail address!</p>';
            }
            else if($_GET['error'] == "wrongpass"){
              echo '<p class="error">Wrong password!</p>';
            }
            else if($_GET['error'] == "nouser"){
              echo '<p class="error">There is no user with this e-mail address!</p>';
            }
          }

       echo ' 
      <form action="includes/login_handler.php" method="POST">
          <input id="login_email" type="email" name="login_email" placeholder="E-mail...">
          <input id="login_pass" type="password" name="login_pass" placeholder="Password...">
          <button type="submit" name="login_submit">Log in!</button>
      </form>
      </div>';
      } else{

        echo '<div id="wrapper_user_area">';
        echo '<h2>You are Logged in!</h2>';
        echo'
            <form action="includes/logout_handler.php" method="POST">
                <button type="submit" name="logout_submit">Log out!</button>
            </form> 
        
            <div id="user_area">
                <p>This is page visible only to logged in users</p>
                <p>More information comming soon!</p>
            </div>
            
            <h3>Show the list of registrated users</h3>
            <form action="" method="POST">
            <button type="submit" name="sql_export">Click me!</button>
            </form> 
            </div>';
            // Get data from database
            if(isset($_POST['sql_export'])){
              require 'includes/dbh.php';
              $sql = "SELECT * FROM users;";
              $result = mysqli_query($connect, $sql);
              $result_check = mysqli_num_rows($result);
          
              if($result_check > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div id='export'><b>" . $row['first_name'] ." ".  $row['last_name'] . "</b> " . $row['email'] ."</div>";
                }
              }
              else{}

            }
      }
  ?>

  </main>

<!-- Footer Section -->
  <?php require 'includes/footer.php';?>
<!-- Footer Section -->
    