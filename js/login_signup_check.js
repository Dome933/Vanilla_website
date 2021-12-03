$(document).ready(function(){
  
  //-----------Sign up Check------------------------------//

    // Check for empty fields
    if(window.location.href.indexOf("sign_up.php?error=empty") > -1){
      if($("#first").val() == 0){
        $("#first").css("border-color", "red");
      }
      if($("#last").val() == 0){
        $("#last").css("border-color", "red");
      }
      if($("#email").val() == 0){
        $("#email").css("border-color", "red");
      }
      if($("#pass").val() == 0){
        $("#pass").css("border-color", "red");
      }
      if($("#pass_repeat").val() == 0){
        $("#pass_repeat").css("border-color", "red");
      }
      if($("#text").val().length < 5){
        $("#text").css("border-color", "red");
      }
    }

    //Check for email, first, and last name
    if(window.location.href.indexOf("sign_up.php?error=invalidmailname") > -1){
      if($("#first").val() == 0){
        $("#first").css("border-color", "red");
      }
      if($("#last").val() == 0){
        $("#last").css("border-color", "red");
      }
      if($("#email").val() == 0){
        $("#email").css("border-color", "red");
      }
    }

    // Check for email
    if(window.location.href.indexOf("sign_up.php?error=email") > -1){
      if($("#email").val() == 0){
        $("#email").css("border-color", "red");
      }
    }

    // Check for first and last name
    if(window.location.href.indexOf("sign_up.php?error=name") > -1){
      if($("#first").val() == 0){
        $("#first").css("border-color", "red");
      }
      if($("#last").val() == 0){
        $("#last").css("border-color", "red");
      }
    } 
    
    //Check for all checkboxes
    if(window.location.href.indexOf("sign_up.php?error=allcheck") > -1){
      $("#check_h3").css("color", "red");
      $("#interests_h3").css("color", "red");
      $("#gender_h3").css("color", "red");    
    }

    //Check for occupation
    if(window.location.href.indexOf("sign_up.php?error=occupation") > -1){
        $("#check_h3").css("color", "red");
    }

    //Check for fields of interests
    if(window.location.href.indexOf("sign_up.php?error=interests") > -1){
      $("#interests_h3").css("color", "red");
    }
    // Check for gender
    if(window.location.href.indexOf("sign_up.php?error=gender") > -1){
      $("#gender_h3").css("color", "red");
    }
    // Check for text area special characters
    if(window.location.href.indexOf("sign_up.php?error=text") > -1){
      if($("#text").val() == 0){
        $("#text").css("border-color", "red");
      }
    }

    // Check for textarea minimum char
    if(window.location.href.indexOf("sign_up.php?error=textchar") > -1){
      if($("#text").val().length < 5){
        $("#text").css("border-color", "red");
      }
    }



// --------------------Login Check--------------------

    // Check for empty fields
    if(window.location.href.indexOf("log_in.php?error=empty") > -1){
        $("#wrapper_log_in form input").css("border-color", "red");
    }

    // Check for valid email
    if(window.location.href.indexOf("log_in.php?error=email") > -1){
      $("#login_email").css("border-color", "red");
    }

    // Check for password
    if(window.location.href.indexOf("log_in.php?error=wrongpass") > -1){
      $("#login_pass").css("border-color", "red");
    }

});