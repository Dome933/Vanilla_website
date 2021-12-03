<?php

if (isset($_POST['login_submit'])) {
  
  require 'dbh.php';

  $email = $_POST['login_email'];
  $pass = $_POST['login_pass'];

  //Check for empty fields
  if (empty($email) || empty($pass)) {
    header("Location: ../log_in.php?error=empty");
    exit();
  }
  //Check valid email
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../log_in.php?error=email");
    exit();
  }

  else{
    $sql = "SELECT * FROM users WHERE email=?;";
    $prep_stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($prep_stmt, $sql)){
      header("Location: ../log_in.php?error=sql");
      exit();
    }
    else{

      mysqli_stmt_bind_param($prep_stmt, "s", $email);
      mysqli_stmt_execute($prep_stmt);
      
      $result = mysqli_stmt_get_result($prep_stmt);
      //Check if there are results
      if($row = mysqli_fetch_assoc($result)){
        //Check for password
        $pass_check = password_verify($pass, $row['pass']);
        if($pass_check == false){
          header("Location: ../log_in.php?error=wrongpass");
          exit();
        }
        else if($pass_check == true){
          //Starting a session
          session_start();
          $_SESSION['userID'] = $row['id_Users'];
          $_SESSION['userMail'] = $row['email'];

          header("Location: ../log_in.php?login=success");
          exit();
        }
        else{
          header("Location: ../log_in.php?error=wrongpass");
          exit();
        }
      }
      else{
        header("Location: ../log_in.php?error=nouser");
        exit();
      }

    }
  }

}
else{
  header("Location: ../log_in.php");
  exit();
}
