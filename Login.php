<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

  <!-- CSS -->
    <link rel="stylesheet" href="css/global.css">

    <link rel="stylesheet" media="(max-width: 720px)" href="css/login-small.css">
    <link rel="stylesheet" media="(max-width: 720px)" href="css/global-small.css">

    <link rel="stylesheet" media="(min-width: 721px)" href="css/login-wide.css">
    <link rel="stylesheet" media="(min-width: 721px)" href="css/global-wide.css">


  <!-- FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  
</head>

<body>

  <?php
        include 'header.php';
  ?>

  <div class="display">
    <img src="images/login/footer.png" alt="" id="back_orange">
      <div id="holder1">
        <img src="images/logo white.png" id="logo">
          <div class="sign_up_login_holder" id="signup">
                    <div id="sign_up1">Sign Up</div>
                      <div id="sign_up_saying">It's quick and easy.</div>
                      <hr id="line3">
                    <form>
                      <input type="text" id="email" name="first_name" placeholder="First name">
                      <input type="text" id="last_name" name="last_name" placeholder="Last name">
                      <input type="email" id="email_signup" name="email_signup" placeholder="Mobile number or email">
                      <input type="password" id="pass_signup" name="pass_signup" placeholder="New password">
                      <div id="b_day_label">Birthday</div>
                          <input type="date" id="b_day_signup" name="b_day_signup" placeholder="Birthday">
                          <select id="gender" name="gender">
                              <option value="">Select your gender </option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                          </select>
                        <div id="gender_label">Gender</div>
                      </form>
                      <a href="Index.php">
                          <button class="sign_up_button" id="signup_button">Sign Up</button>
                      </a>
                        <div id="sign_in_text" >Already have an account? <button id="sign_in_small" onclick="SlideUp()">Sign in</button></div>
            
          </div>
          <div class="sign_up_login_holder" id="login">
              <div id="sign_up1">Login</div>
              <div id="sign_up_saying">Welcome back! Let the journey continue.</div>
              <hr id="line3"> 
              <form>
                <input type="email" id="email_signup" name="email_signup" placeholder="Mobile number or email">
                <input type="password" id="pass_signup" name="pass_signup" placeholder="Password">
              </form>          
                <h1 id="forgot_pass">Forgot Password</h1> 
                <a href="Index.php" id="sign_up_button">
                          <button class="sign_up_button" id="sign_up_button1">Log In</button>
                </a>
                  <button id="new_account_button" onclick="SlideDown()">Create New Account</button>
                
          </div>
      </div>
      
  
    </div>
  
    <script src="js/script.js"></script>


</body>
</html>
