<?php  require_once ('../classes/database.php');
$id=$_GET['demande_id'];
session_start();
require_once ('../classes/database.php');
 $db = new Database2();
 $result = $db->query("select * from clients c, demande ,ville ,lieu v,coli cl WHERE cllient=client_id and source=lieu_id and v.ville=id and cl.demmande=Demande_id and Demande_id= '.$id.'");
 $user = $db->fetch($result);
  if (!empty($user)) {
    $user_id = isset($user["User_id"]) ? $user["User_id"] : "N/A";
    $client_id = isset($user["client_id"]) ? $user["client_id"] : "N/A";
    $nom = isset($user["Nom"]) ? $user["Nom"] : "N/A";
    $prenom = isset($user["Prenom"]) ? $user["Prenom"] : "N/A";
    $ville = isset($user["Ville"]) ? $user["Ville"] : "N/A";
    $email = isset($user["Email"]) ? $user["Email"] : "N/A";
    $phone = isset($user["Phone"]) ? $user["Phone"] : "N/A";
    $adresse_client = isset($user["addresse_client"]) ? $user["addresse_client"] : "N/A";
    $cin = isset($user["CIN"]) ? $user["CIN"] : "N/A";
    $demande_id = isset($user["Demande_id"]) ? $user["Demande_id"] : "N/A";
    $prix_demande = isset($user["prix_Demande"]) ? $user["prix_Demande"] : "N/A";
    $date_demande = isset($user["date_Demande"]) ? $user["date_Demande"] : "N/A";
    $date_limite = isset($user["date_limite"]) ? $user["date_limite"] : "N/A";
    $source = isset($user["source"]) ? $user["source"] : "N/A";
    $destination = isset($user["destination"]) ? $user["destination"] : "N/A";
    $client = isset($user["cllient"]) ? $user["cllient"] : "N/A";
    $id = isset($user["id"]) ? $user["id"] : "N/A";
    $libel = isset($user["libel"]) ? $user["libel"] : "N/A";
    $id_lieu = isset($user["id_lieu"]) ? $user["id_lieu"] : "N/A";
    $adresse = isset($user["adresse"]) ? $user["adresse"] : "N/A";
    $code_postal = isset($user["code_postal"]) ? $user["code_postal"] : "N/A";
    $num = isset($user["num"]) ? $user["num"] : "N/A";
    $description = isset($user["description"]) ? $user["description"] : "N/A";
    $largeur = isset($user["largeur"]) ? $user["largeur"] : "N/A";
    $longeur = isset($user["longeur"]) ? $user["longeur"] : "N/A";
    $profondeur = isset($user["profondeur"]) ? $user["profondeur"] : "N/A";
    $poids = isset($user["poids"]) ? $user["poids"] : "N/A";
    $quantite = isset($user["quantite"]) ? $user["quantite"] : "N/A";
    $demmande = isset($user["demmande"]) ? $user["demmande"] : "N/A"; 
    $db->close();
} else {
    echo 'nothing          jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj';
}
?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Invoice | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
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

    <body data-topbar="dark">
    
        <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    
            <!-- Begin page -->
            <div id="layout-wrapper">
    
                
                
    
                <!-- ========== Left Sidebar Start ========== -->
                <?php include  '../client/header.php';?>
<?php include  '../client/sidebar.php';?>
                <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Invoice</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                            <li class="breadcrumb-item active">Invoice</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="row" style="margin-left: 20px; margin-right: 20px;">
                <div class="col-12">
              
                        <h4 class="float-end font-size-16"><strong>Request # 12</strong></h4>
                        <h3>
                            <img src="../assets/images/logo-dark.png" alt="logo" height="24"/>
                        </h3>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-end">
                            <address>
                            <?php echo '<strong> Client :<br>'.$nom.' '.$prenom.' </strong><br>'.$phone.' <br>'.$email?>
                                
                            
                            </address>
                        </div>
                        
                    </div>
                    <div class="row" >
                        <div class=" col-12">
                            <address>
                                Source :</strong><br>
                                <?php echo $adresse .' . '. $code_postal .' . '. $libel; ?>
                            </address>
                        </div>
                        <div class=" col-12">
                            <address>
                                Destination :</strong><br>
                                Marrakech, B.P. 13201, MOROCCO , 38000 , SALE
                            </address>
                        </div>
                        <div class=" col-12 text-end">
                            <address>
                                <strong>Order Date:</strong><br>
                                <?php echo $date_demande; ?>         <br><br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        
<div class="row">
<div class="col-12">
<div>
<div class="p-2">
    <h3 class="font-size-16"><strong>Packages List</strong></h3>
</div>
<div class="">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <td><strong>Item</strong></td>
                <td><strong>Discription</strong></td>

                <td class="text-center"><strong>Quantity</strong></td>
                <td class="text-center"><strong>width</strong></td>
                <td class="text-center"><strong>weight</strong></td>
                <td class="text-center"><strong>length</strong></td>
                <td class="text-center"><strong>depth</strong></td>
                </td>
            </tr>
            </thead>
            <tbody>
            <!-- foreach ($order->lineItems as $line) or some such thing here -->
            <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $description; ?></td>
                <td class="text-center"><?php echo $quantite; ?></td>
                <td class="text-center"><?php echo $largeur; ?></td>
                <td class="text-center"><?php echo $longeur; ?></td>
                <td class="text-center"><?php echo $poids; ?></td>
                <td class="text-center"><?php echo $profondeur; ?></td>
            </tr>
            
            <tr>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line"></td>

                <td class="no-line text-center">
                    <strong>Price</strong></td>
                <td class="no-line text-end"><h4 class="m-0"><?php $user["User"]='client';
                echo $prix_demande; ?> dhs</h4></td>
            </tr>
            </tbody>
        </table>
    </div>

                                                        <div class="d-print-none">
                                                            <div class="float-end">
                                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                                <a href="chat.php?id_client=<?php echo $user["User"]?>" class="btn btn-primary waves-effect waves-light ms-2">Accepte</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div> <!-- end row -->
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Upcube.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="../assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="../assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="../assets/css/bootstrap-dark.min.css" data-appStyle="../assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="../assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="../assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="../assets/libs/jquery/jquery.min.js"></script>
        <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets/libs/node-waves/waves.min.js"></script>

        <script src="../assets/js/app.js"></script>


    </body>
</html>
<?php
 
 ?>