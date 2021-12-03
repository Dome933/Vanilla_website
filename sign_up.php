  <!-- Header Section -->
  <?php require 'includes/header_nav.php';?>
  <!-- Header Section -->


  <main id="content">
              
  <div id="wrapper_sign_up">

<!-- -----SIGN UP FORM----------------->
    <div id="sign_up_form">
      <h2>Sign up!</h2>

      <?php
        if (isset($_GET['error'])) {
          // Check for empty fields error
          if($_GET['error'] == "empty"){
            echo '<p class="error">Fill in all fields!</p>';
          }
          // Check for invalid first name, last name and email
          else if ($_GET['error'] == "invalidmailname") {
            echo '<p class="error">Invalid name or e-mail!</p>';
          }
          // Check for invalid email
          else if ($_GET['error'] == "email") {
            echo '<p class="error">Invalid e-mail adresse!</p>';
          }
          // Check for invalid first or last name
          else if ($_GET['error'] == "name") {
            echo '<p class="error">You cant use numbers in your first or last name!</p>';
          }
          //Check for all checkboxes
          else if ($_GET['error'] == "allcheck") {
            echo '<p class="error">You have to check some checkboxes!</p>';
          }
          // Check for Occupation checkbox
          else if ($_GET['error'] == "occupation") {
            echo '<p class="error">You have to choose your occupation!</p>';
          }
          //Check for fields of interests
          else if ($_GET['error'] == "interests") {
            echo '<p class="error">You have to choose your field of interest!</p>';
          }
          //Check if Gender is checked
          else if ($_GET['error'] == "gender") {
            echo '<p class="error">You have to choose your gender!</p>';
          }
          // Check for minimum 5 characters in textarea
          else if ($_GET['error'] == "textchar") {
            echo '<p class="error">You have to write minimum 5 characters in additional info!</p>';
          }
          // Check for special characters in text input field
          else if ($_GET['error'] == "text") {
            echo '<p class="error">Special characters are not allowed in your message (only "." and ",")!</p>';
          }
          // Check if both passwords match
          else if ($_GET['error'] == "wrongpass") {
            echo '<p class="error">You used two different passwords!</p>';
          }
          // Check if email adress is already taken
          else if ($_GET['error'] == "emailtaken") {
            echo '<p class="error">This e-mail adress has already been taken!</p>';
          }
        }
        else if (isset($_GET['signup'])) {
          if($_GET['signup'] == "success"){
            echo '<p class="success">Signup successful!</p>';
          }
        }
      ?>

      <form action="includes/sign_up_handler.php" method="POST">

      <?php 
      // ------First name------
      if (isset($_GET['first'])) {
        $first = $_GET['first'];
        echo '<input type="text" name="first" id="first" placeholder="Firstname..." value="'.$first.'">';
      }
      else{
        echo '<input type="text" name="first" id="first" placeholder="Firstname...">';
      }

      // -------Last name-------
      if (isset($_GET['last'])) {
        $last = $_GET['last'];
        echo '<input type="text" name="last" id="last" placeholder="Lastname..." value="'.$last.'">';
      }
      else{
        echo '<input type="text" name="last" id="last" placeholder="Lastname...">';
      }

      // -------Email-------
      if (isset($_GET['email'])) {
        $email = $_GET['email'];
        echo '<input type="email" name="email" id="email" placeholder="E-mail..." value="'.$email.'">';
      }
      else{
        echo '<input type="email" name="email" id="email" placeholder="E-mail...">';
      }
      ?>

        <!------------Password---------------------- -->
        <input type="password" name="pass" id="pass" placeholder="Password...">
        <input type="password" name="pass_repeat" id="pass_repeat" placeholder="Repeat password...">
        
        <!-- ---------Occupation-------------------- -->
        <h3 id="check_h3">Choose your occupation:</h3><br>
        <div id="check_wrapper">
          <div class="check_box">
            <label for="business">Business owner</label>
            <input type="checkbox" name="occupation" id="occup" value="business">
          </div>
  
          <div class="check_box">
            <label for="employee">Employee</label>
            <input type="checkbox" name="occupation" id="occup" value="employee">
          </div>
  
          <div class="check_box">
            <label for="investor">Investor</label>
            <input type="checkbox" name="occupation" id="occup" value="investor">
          </div>
        </div>
        
        <!-- -----------Fields of interest----------- -->
        <h3 id="interests_h3">Select your field of interest</h3>
        <select name="fieldsOption" size="4">
          <option value="web_dev">Web Development</option>
          <option value="soft_dev">Software Development</option>
          <option value="web_aps">Web Apps</option>
          <option value="mob_dev">Mobile Apps</option>
        </select><br><br>

        <!-- -------------Gender------------------------ -->
        <h3 id="gender_h3">Choose your gender</h3>
        <div class="gender_wrapper">
          <label for="male">Male</label>
          <input type="radio" name="gender" value="male" id="male">
        </div>

        <div class="gender_wrapper">
          <label for="female">Female</label>
          <input type="radio" name="gender" value="female" id="female">
        </div>
        

        <!-- --------------Textbox------------------- -->
        <h3>Write some additional info:</h3>

        <?php 
        if (isset($_GET['text'])) {
          $text = $_GET['text'];
          echo '<textarea name="text" id="text" cols="30" rows="10">'.$text.'</textarea>';
        }
        else{
          echo '<textarea name="text" id="text" cols="30" rows="10"></textarea>';
        }
        ?>
        <!----------- Submit ---------->
        <button type="submit" name="sign_up_submit" id="signup_submit">Sign up!</button>
      </form>
    </div>
<!-- --------------End of Sign up Form------------------- ------------------------------>


  </div>

  </main>
  
  
  
  <!-- Footer Section -->
    <?php require 'includes/footer.php';?>
  <!-- Footer Section -->

