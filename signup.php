<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewrt" content="width=device-width, initial-scale=1.0" />
    <title>SkyTech</title>
    <link rel="stylesheet" href="assets/css/style1.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">SkyTech</a>

        <button class="button" id="form-open">Login</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home show">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        
        <!-- Signup From -->
        <div class="form login_form">
          <form method="POST" action="signupprocess.php">
            <h2>Signup</h2>

            <?php
            if (isset($_GET['error'])) {
              $errorMessage = "";
              // Handle different error cases
              switch ($_GET['error']) {
                case "username_exists":
                  $errorMessage = "Username already exists.";
                  break;
                case "registration_failed":
                  break;
                  // Skip default case
              }
          
              // Only display error message if it is not empty
              if (!empty($errorMessage)) {
                  echo '<div class="error-message">';
                  echo '<span>' . $errorMessage . '</span>';
                  echo '</div>';
              }
            }
            ?>

            <div class="input_box">
              <input type="username" placeholder="Enter your username" name="username" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Create password" name="password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="submit" value="Sign Up">
            </div>
            <!-- <div class="input_box">
              <input type="password" placeholder="Confirm password" name="confirm_password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div> -->

            <!-- <button class="button">Signup Now</button> -->

            <div class="login_signup">Already have an account? <a href="login.php" id="login">Login</a></div>
          </form>
        </div>
      </div>
    </section>
    
    <style>
    .error-message {
    display: flex;
    align-items: center;
    justify-content: center;
    color: red;
    background-color: #f8d7da;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    text-align: center;
    }
    .success-message {
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
    background-color: #4BB543;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    text-align: center;
    }
    </style>

    <script src="assets/js/script1.js"></script>
    <script>
      // Get the modal element
      var modal = document.getElementById("errorModal");

      // Get the close button element
      var closeButton = document.getElementsByClassName("close")[0];

      // When the page loads, show the modal
      window.onload = function() {
        modal.style.display = "block";
      };

      // When the user clicks on the close button, hide the modal
      closeButton.onclick = function() {
        modal.style.display = "none";
      };
    </script>
  </body>
</html>