<?php
// Check if user clicked Sign up button
if(isset($_POST['sign_up_submit'])){

  //Database connection
  require 'dbh.php';

  //Defining variables
  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $pass_repeat = $_POST['pass_repeat'];
  $occupation = $_POST['occupation'];
  $fieldsOption = $_POST['fieldsOption'];
  $gender = $_POST['gender'];
  $text = $_POST['text'];




// ****************************************************
  //Check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($pass) || empty($pass_repeat) || empty($text)) {
    header("Location: ../sign_up.php?error=empty&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  } 
  
  //Check for email, first and last name
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))){
    header("Location: ../sign_up.php?error=invalidmailname");
    exit();
  } 
  
  //Check for validate email
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../sign_up.php?error=email&first=".$first."&last=".$last."&text=".$text);
    exit();
  } 
  
  // Check for first and last name (no numbers allowed)
  else if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
    header("Location: ../sign_up.php?error=name&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }
  
  //Check for all checkboxes
  else if(strlen($occupation) == 0 && strlen($fieldsOption) == 0 && strlen($gender) == 0){
    header("Location: ../sign_up.php?error=allcheck&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }

  // Check if Occupation checkbox is checked
  else if(strlen($occupation) == 0){
    header("Location: ../sign_up.php?error=occupation&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }
  
  //Check for fields of interest
  else if(strlen($fieldsOption) == 0){
    header("Location: ../sign_up.php?error=interests&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }
  //Gender Check
  else if(strlen($gender) == 0){
    header("Location: ../sign_up.php?error=gender&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }
  // Check for minimum 5 characters in textarea
  else if (strlen($text) < 5){
    header("Location: ../sign_up.php?error=textchar&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }

  // Check for special characters in text input (numbers, space, "." and "," allowed)
  else if (!preg_match("/^[a-zA-Z .,0-9]*$/", $text)){
    header("Location: ../sign_up.php?error=text&first=".$first."&last=".$last."&email=".$email);
    exit();
  }
 
  //Check if password1 and password2 match each other 
  else if($pass !== $pass_repeat){
    header("Location: ../sign_up.php?error=wrongpass&first=".$first."&last=".$last."&email=".$email."&text=".$text);
    exit();
  }
  // Check if email is already taken
  else{

    $sql = "SELECT email FROM users WHERE email=?";
    $prep_stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($prep_stmt, $sql)){
      header("Location: ../sign_up.php?error=sql");
      exit();
    }
    else {
      mysqli_stmt_bind_param($prep_stmt, "s", $email);
      mysqli_stmt_execute($prep_stmt);
      mysqli_stmt_store_result($prep_stmt);
      $result_check = mysqli_stmt_num_rows($prep_stmt);
      if ($result_check > 0){
        header("Location: ../sign_up.php?error=emailtaken&first=".$first."&last=".$last."&text=".$text);
        exit();
      } else { // Insert into database

        $sql = 
        "INSERT INTO users (first_name, last_name, email, pass, occupation, interests, gender, user_text ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $prep_stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($prep_stmt, $sql)){
          header("Location: ../sign_up.php?error=sql");
          exit();
        }
        else{
          $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($prep_stmt, "ssssssss", $first, $last, $email, $pass_hash, $occupation, $fieldsOption, $gender, $text);
          mysqli_stmt_execute($prep_stmt);
          header("Location: ../sign_up.php?signup=success");
          exit();
        }


      }
    }
    mysqli_stmt_close($prep_stmt);
    mysqli_close($connect);

  }
  

}
else{
  header("Location: ../sign_up.php");
  exit();
}