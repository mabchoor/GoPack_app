<?php
        session_start();
        require_once('../classes/admin.php');
         require_once('../classes/livraison.php');
         require_once('../classes/contact.php');
         require_once('../classes/chauffeur.php');
         require('../classes/client.php');
         $data=afficheradmin();
       if(isset($_SESSION['iduti']) && isset($_SESSION['id_admin'])){
        
        ?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title> Admin & Dashboard</title>
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

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark" style="width: 150px; height: 50px;">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-1.png" alt="logo-sm" height="22" style="width: 150px; height: 50px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-1.png" alt="logo-dark" height="20" style="width: 150px; height: 50px;"> 
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-small.png" alt="logo-sm-light" height="22" style="width: 70px; height: 30px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-1.png" alt="logo-light" height="20" style="width: 150px; height: 50px;">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>

                      
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                      <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-apps-2-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                   
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Mybox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Trush</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="../assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Chat</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-notification-3-line"></i>
                                <span class="noti-dot"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <p id="notification"></p>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                // effectue une requête AJAX périodique vers la page PHP pour récupérer les nouvelles données insérées
                $.ajax({
                    url: 'insert.php',
                    dataType: 'json',
                    success: function(data) {
                        // affiche la notification avec les données insérées
                        $('#notification').text('Nouvelle insertion avec ID ' + data.id + ' : colonne1 = ' + data.colonne1 + ', colonne2 = ' + data.colonne2);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            }, 5000); // effectue la requête toutes les 5 secondes (modifier selon les besoins)
        });
    </script>
                                            </div>
                                        </div>
                                    </a>
                                   
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo $data->Image?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1"><?php echo $data->Username?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                                
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="../traitement/logout.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="ri-settings-2-line"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="<?php echo $data->Image?>" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1"><?php echo $data->Username?></h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Admin Portal</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                          <!--  <li>
                                <a href="calender.php" class=" waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                
                            <li>
                                <a href="mails.html" class=" waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Email</span>
                                </a>
                             
                            </li>-->
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-dropbox-fill"></i>
                                    <span>Managing Shipments</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                    <a href="request_shipment.php" class=" waves-effect">
                                        Shipments Requests</a>
                                            <a href="in_process_shipment.php" class=" waves-effect">
                                                In-Process Requested</a>
             <a href="shipment_deliveries.php" class=" waves-effect">
                                            Shipments Deliveries</a>                                    
                                </ul>
                            </li> <li>
                                <a href="drivers.php" class=" waves-effect">
                                    <i class="fas fa-shipping-fast "></i>
                                    <span>Managing Drivers</span>
                                </a>
                             
                            </li>
                            <li>
                                <a href="client.php" class=" waves-effect">
                                    <i class="ri-group-line"></i>
                                    <span>Managing Clients</span>
                                </a>
                             
                            </li>
                            

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fa fa-info-circle"></i>
                                    <span>Help</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="calendar.html" class=" waves-effect">
                                            Account</a>
                                            <a href="contact.php" class=" waves-effect">
                                                Contact</a>
                                              <!--  <a href="calendar.html" class=" waves-effect">Settings
                                                </a>
                                                <a href="calendar.html" class=" waves-effect">Assistance
                                                </a>-->
                                    </li>


                                    
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            

            <!-- ============================================================== -->
                   <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
   <!-- JAVASCRIPT -->
   <script src="../assets/libs/jquery/jquery.min.js"></script>
   <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
   <script src="../assets/libs/simplebar/simplebar.min.js"></script>
   <script src="../assets/libs/node-waves/waves.min.js"></script>

   <!-- apexcharts -->
   <script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

   <!-- jquery.vectormap map -->
   <script src="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="../assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

   <!-- Required datatable js -->
   <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   
   <!-- Responsive examples -->
   <script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

   <script src="../assets/js/pages/dashboard.init.js"></script>

   <script src="../assets/js/app.js"></script>

    </body>
</html>
<?php }else{header("Location: ../visiteur/index.php");}?>