<?php require('navbar.php');?>
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
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Acceuil</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->



                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                                <h4 class="mb-2">
                                                </h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="mdi mdi-currency-usd font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">In Transit</p>
                                                <h4 class="mb-2"></h4>
                                                <p class="text-muted mb-0">Your Delivery Journey in Progress</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-usd font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Delivered with Care</p>
                                                <h4 class="mb-2">
                                              </h4>
                                                <p class="text-muted mb-0">Your Package Has Arrived Safely</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Unopened Messages</p>
                                                <h4 class="mb-2"><?php
                                              // echo getecountmessage('User_64338af9d7cfb');
                                                ?></h4>
                                                <p class="text-muted mb-0">Discovering Unread Gems in Your Inbox</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="card-title mb-4">Shipping in Progress</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Driver</th><th>Destination</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                        <th style="width: 120px;">Price</th>
                                                    </tr>
                                                </thead><!-- end thead -->
               
                                                
                                                     <!-- end -->
                                                     
                                                     <!-- end -->
                                                     <!-- end -->
                                                </tbody><!-- end tbody -->
                                            </table> <!-- end table -->
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                            
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Daily Sales Insights</h4>
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Delivered with Care</h4>
                                        <p class="card-title-desc">Exporting Your List of Delivered Items with Care and Versatility using the Buttons Extension for DataTables.
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Driver</th>
                                                <th>City</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
            

                
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
                        <img src="http://localhost/PackGo_final/assets\images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="http://localhost/PackGo_final/assets\images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="http://localhost/PackGo_final/assets\css/bootstrap-dark.min.css" data-appStyle="http://localhost/PackGo_final/assets\css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="http://localhost/PackGo_final/assets\images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="http://localhost/PackGo_final/assets\css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
   <!-- JAVASCRIPT -->
   <script src="http://localhost/PackGo_final/assets\libs/jquery/jquery.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/metismenu/metisMenu.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/simplebar/simplebar.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/node-waves/waves.min.js"></script>

   <!-- apexcharts -->
   <script src="http://localhost/PackGo_final/assets\libs/apexcharts/apexcharts.min.js"></script>

   <!-- jquery.vectormap map -->
   <script src="http://localhost/PackGo_final/assets\libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

   <!-- Required datatable js -->
   <script src="http://localhost/PackGo_final/assets\libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   
   <!-- Responsive examples -->
   <script src="http://localhost/PackGo_final/assets\libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="http://localhost/PackGo_final/assets\libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

   <script src="http://localhost/PackGo_final/assets\js/pages/dashboard.init.js"></script>
  <!-- twitter-bootstrap-wizard js -->
  <script src="http://localhost/PackGo_final/assets\libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="http://localhost/PackGo_final/assets\js/pages/datatables.init.js"></script>
 <!-- Required datatable js -->
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
 <!-- Buttons examples -->
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/jszip/jszip.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/pdfmake/build/pdfmake.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/pdfmake/build/vfs_fonts.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-buttons/js/buttons.print.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
 <script src="http://localhost/PackGo_final/assets\libs/datatables.net-select/js/dataTables.select.min.js"></script>
 
  <script src="http://localhost/PackGo_final/assets\libs/twitter-bootstrap-wizard/prettify.js"></script>

   <script src="http://localhost/PackGo_final/assets\js/app.js"></script>
           <!-- apexcharts -->
           <script src="http://localhost/PackGo_final/assets\libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        
           <script src="http://localhost/PackGo_final/assets\js/pages/sparklines.init.js"></script>

    </body>
</html>
