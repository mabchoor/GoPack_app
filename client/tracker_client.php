<?php  require_once ('../classes/database.php');


require_once ('../classes/database.php');
?>

<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Starter page | Upcube - Admin & Dashboard Template</title>
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

    <body data-topbar="dark">
    

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           

            <!-- ========== Left Sidebar Start ========== -->
            <?php include  'comun\header.php';?>
            <?php include  'comun\sidebare.php';?>
            <!-- Left Sidebar End -->

            


            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Acceuil</a></li>
                                            <li class="breadcrumb-item active">Shipment tracker</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Shipment Delivery List in Progress - Efficient Handling of Orders!</h4>
                                        <p class="card-title-desc">
                                            Managing the Accepted Offer for Shipment Deliveries - Ensuring Smooth Processing and Timely Deliveries!
                                        </p>

                                        <table id="key-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    
                                                        <th>Driver</th>  
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th>Price</th>
                                                        <th>consult</th>
                                                        <th>delivering in</th>
                                                        <th>delay of</th>
                                                        
                                                </tr>
                                            </thead>
                                        
                                            <tbody>
                                               <?php
                                               $db = new Database2();
                                               $id = $_SESSION['iduti'];
                                               $result = $db->query("SELECT * FROM `delivrys` where etat=0 and User_id=" . $id);
                                               
                                               if ($result !== false) {
                                                   if ($db->numRows($result) > 0) {
                                                       while ($user = $db->fetch($result)) {
                                               
                                                           $time_serv = isset($user["time_serv"]) ? $user["time_serv"] : "N/A";
                                                           $date = isset($user["date"]) ? $user["date"] : "N/A";
                                                           $prix = isset($user["prix"]) ? $user["prix"] : "N/A";
                                                           $Demande_id = isset($user["Demande_id"]) ? $user["Demande_id"] : "N/A";
                                                           $date_limite = isset($user["date_limite"]) ? $user["date_limite"] : "N/A";
                                                           $chauffeur = isset($user["chauffeur"]) ? $user["chauffeur"] : "N/A";
                                               
                                                           echo '<tr>
                                                                   <td><h6 class="mb-0">' . $chauffeur . '</h6></td>
                                                                   <td>' . $date . '</td>
                                                                   <td>' . $time_serv . '</td>
                                                                   <td>' . $prix . '</td>
                                                                   <td><a href="request.html" class="btn btn-light waves-effect">View</a></td>
                                                                   <td><h5 class="mb-3">' . $date_limite . '</h5></td>
                                                                   <td><h6 class="mb-3">' . $Demande_id . '</h6></td>
                                                                 </tr>';
                                                       }
                                                       $db->close();
                                                   } else {
                                                       echo 'No data found.';
                                                   }
                                               } else {
                                                   echo 'Error executing query.';
                                               }
                                               ?>
                                                
                                            </tbody>
                                        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © created
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    By <i class="mdi mdi-heart text-danger"></i>Abderrahmane
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
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
   <!-- JAVASCRIPT -->
   <script src="assets/libs/jquery/jquery.min.js"></script>
   <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/metismenu/metisMenu.min.js"></script>
   <script src="assets/libs/simplebar/simplebar.min.js"></script>
   <script src="assets/libs/node-waves/waves.min.js"></script>

   <!-- apexcharts -->
   <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

   <!-- jquery.vectormap map -->
   <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

   <!-- Required datatable js -->
   <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   
   <!-- Responsive examples -->
   <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

   <script src="assets/js/pages/dashboard.init.js"></script>
  <!-- twitter-bootstrap-wizard js -->
  <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="assets/js/pages/datatables.init.js"></script>
 <!-- Required datatable js -->
 <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
 <!-- Buttons examples -->
 <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
 <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
 <script src="assets/libs/jszip/jszip.min.js"></script>
 <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
 <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
 <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
 <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
 <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

 <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
 <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
 
  <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

   <script src="assets/js/app.js"></script>
           <!-- apexcharts -->
           <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        
           <script src="assets/js/pages/sparklines.init.js"></script>

    </body>
</html>
