<?php
require ('connexion/confige.php');
include 'connexion/functions.php';
require 'connexion/mail.php';?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body class="auth-body-bg">
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img style="width: 100px; height: 50px;" src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
                        <div class="p-3">
                        <form class="form-horizontal mt-3" action="" method="post"> <!-- Update action to the appropriate PHP script for processing the login -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; // Retrieve username from form data
    $password = $_POST["password"]; // Retrieve password from form data
    
    // Check if the username is blacklisted


    if (is_blacklisted($username)) {
        echo '<div class="row">
        <div class="card-body">
          <div class="alert alert-danger" role="alert">
          This username is blacklisted. Please contact the administrator.
          </div>
        </div>
      </div>';    } else {
        // Call the login() function to check if the username and password match
        if (login($username, $password)) {
               // Get the role of the logged-in user from the session
               $role = $_SESSION["role"];
            
               // Redirect to dashboard or home page based on the role
               switch ($role) {
                   case 'client':
                       header("Location: ../dashboard.php"); // Replace with the appropriate URL for client dashboard
                       break;
                   case 'admin':
                       header("Location: ../admin_dashboard.php"); // Replace with the appropriate URL for admin dashboard
                       break;
                   // Add more cases for other roles as needed
                   default:
                       // Redirect to a generic home page for unknown roles
                       header("Location: ../dashboard_chauffeur.php"); // Replace with the appropriate URL for home page
                       break;
               }
               exit();
        } else {
            // Display an error message for invalid login
            echo '<div class="row">
            <div class="card-body">
              <div class="alert alert-danger" role="alert">
              Invalid mail or password. Please try again.
              </div>
            </div>
          </div>';
        }
    }
}
?>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" type="text" required="" placeholder="Username" name="username"> <!-- Add a name attribute to the input field for username -->
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password"> <!-- Add a name attribute to the input field for password -->
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="form-label ms-1" for="customCheck1">Remember me</label>
            </div>
        </div>
    </div>

    <div class="form-group mb-3 text-center row mt-3 pt-1">
        <div class="col-12">
            <button class="btn btn-info w-100 waves-effect waves-light" type="submit" name="login">Log In</button> <!-- Add a name attribute to the submit button for login -->
        </div>
    </div>

    <div class="form-group mb-0 row mt-2">
        <div class="col-sm-7 mt-3">
            <a href="auth-recoverpw.php" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
        </div>
        <div class="col-sm-5 mt-3">
            <a href="auth-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
        </div>
    </div>
</form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
