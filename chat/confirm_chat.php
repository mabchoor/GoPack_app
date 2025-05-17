<?php

//confirm_chat.php

include('../classes/chat.php');

session_start();


    echo <<<section
    <!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Lock screen packgo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="packgo" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                      
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" action="" method="post">
    
                                <div class="text-center mb-4" >
                                    <img src="../assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="thumbnail">
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="date" required="" name="date" placeholder="date">
                                    </div>
                                    <div class="col-12">
                                        <input class="form-control" type="number" name="prix" required="" placeholder="Prix">
                                    </div>
                                </div>
    
                                <div class="form-group text-center row mt-3">
                                    <div class="col-12">
                                        <input class="btn btn-info w-100 waves-effect waves-light" type="submit" name="submit" value="confirm">
                                    </div>
                                </div>
    
                               
                            </form>
                        </div>
    
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>

    </body>
</html>
section;
$_SESSION["demande"]='1';
if(isset($_POST["submit"])){
	$query = "
	INSERT INTO livraison  
	(demande, chauffeur,prix,date ) 
	VALUES (".$_SESSION["demande"].",".$_SESSION['id_chauffeur']." ,".$_POST['prix'].",".$_POST['date']." );
	";

	$statement = $access->query($query);

	$access->execute();
    header('Location:../stripeProject/checkout.php');

}



?>