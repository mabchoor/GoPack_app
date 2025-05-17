<?php
require 'connexion\confige.php';
include 'connexion\functions.php';
require_once('classes\pdo.php');

require 'connexion\mail.php';
//mabchour abderrahmane
?>
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
                        <form class="form-horizontal mt-3" action="" method="post">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    


    if (is_blacklisted($username)) {
        echo '<div class="row">
        <div class="card-body">
          <div class="alert alert-danger" role="alert">
          This username is blacklisted. Please contact the administrator.
          </div>
        </div>
      </div>';    
    } 
      else {
        if (login($username, $password)) {
               $role = $_SESSION["role"];
               $access = new database();
               switch ($role) {
                   /*case 'client':
                       header("Location: ../dashboard.php");
                       break;
                   case 'admin':
                       header("Location: ../admin_dashboard.php");
                       break;
                   case 'chauffeur':
                       header("Location: ../dashboard_chauffeur.php"); // 
                       break;*/
                      

                       case '1':
                        $req="select * from chauffeur where user_id='".$_SESSION['iduti']."';";
        
                        $access->query($req);
                        $access->execute();
                        
                        $_SESSION['id_chauffeur']=$access->one()->Chauffeur_id;
                        $_SESSION['chauffeur']=$access->one()->disponible;
                        if($access->one()->disponible=='0') { 
                           
                
                            header("Location: chauffeur/index.php");
                        }
                       
                        header("Location: chauffeur/index.php");
                        break;
                    case '2':
                        $req="select * from client where user='".$_SESSION['iduti']."';";

                        $access->query($req);
                        $access->execute();
                      
                        $_SESSION['client_id']=$access->one()->client_id;
                        $_SESSION['client']=$access->one()->dispo='0';
                        if($access->one()->dispo=='0') { 
                           
                
                            header("Location: client/profile.php");
                        }
                       header("Location: client/index.php");                       
                    break;
                    case '0':
                        $req="select * from administrateur where user_id='".$_SESSION['iduti']."';";
        
                        $access->query($req);
                        $access->execute();
                        
                        $_SESSION['id_admin']=$access->one()->admin_id;
                        
                        header("Location: admin/index.php");                        break;
               }
               exit();
        } else {
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
            <input class="form-control" type="text" required="" placeholder="Username" name="username">
        </div>
    </div>

    <div class="form-group mb-3 row">
        <div class="col-12">
            <input class="form-control" type="password" required="" placeholder="Password" name="password">
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
            <button class="btn btn-info w-100 waves-effect waves-light" type="submit" name="login">Log In</button> 
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
