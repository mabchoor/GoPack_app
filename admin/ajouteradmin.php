<?php
require_once('navbar.php');?>

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
                                    <h4 class="mb-sm-0">Forms Elements</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Forms Elements</li>
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

                                        <h4 class="card-title">Textual inputs</h4>
                                        <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="search" placeholder="How do I shoot web" id="example-search-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email" placeholder="bootstrap@example.com" id="example-email-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="url" placeholder="https://getbootstrap.com" id="example-url-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number" value="42" id="example-number-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="month" value="2020-03" id="example-month-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="week" value="2020-W14" id="example-week-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color w-100" id="example-color-input" value="#0f9cf3" title="Choose your color">
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sizing</h4>
                                        <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                                        <div>
                                            <div class="mb-4">
                                                <input class="form-control" type="text" placeholder="Default input">
                                            </div>
                                            <div class="mb-4">
                                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                            </div>
                                            <div>
                                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Range Inputs</h4>
                                        <p class="card-title-desc">Set horizontally scrollable range inputs using <code>.form-control-range</code>.</p>

                                        <div>
                                            <h5 class="font-size-14">Example</h5>
                                            <input type="range" class="form-range" id="formControlRange">
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="font-size-14">Custom Range</h5>
                                            <input type="range" class="form-range" id="customRange1">

                                            <input type="range" class="form-range mt-3" min="0" max="5" id="customRange2">
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Checkboxes</h4>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div>
                                                    <h5 class="font-size-14 mb-4">Form Checkboxes</h5>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                                        <label class="form-check-label" for="formCheck1">
                                                            Form Checkbox
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                                                        <label class="form-check-label" for="formCheck2">
                                                            Form Checkbox checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ms-auto">
                                                <div class="mt-4 mt-lg-0">
                                                    <h5 class="font-size-14 mb-4">Form Checkboxes Right</h5>
                                                    <div>
                                                        <div class="form-check form-check-right mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheckRight1">
                                                            <label class="form-check-label" for="formCheckRight1">
                                                                Form Checkbox Right
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input" type="checkbox" id="formCheckRight2"
                                                                checked>
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                Form Checkbox Right checked
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Radios</h4>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div>
                                                    <h5 class="font-size-14 mb-4">Form Radios</h5>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1" checked>
                                                        <label class="form-check-label" for="formRadios1">
                                                            Form Radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios2">
                                                        <label class="form-check-label" for="formRadios2">
                                                            Form Radio checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ms-auto">
                                                <div class="mt-4 mt-lg-0">
                                                    <h5 class="font-size-14 mb-4">Form Radios Right</h5>
                                                    <div>
                                                        <div class="form-check form-check-right mb-3">
                                                            <input class="form-check-input" type="radio" name="formRadiosRight"
                                                                id="formRadiosRight1" checked>
                                                            <label class="form-check-label" for="formRadiosRight1">
                                                                Form Radio Right
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input" type="radio" name="formRadiosRight"
                                                                id="formRadiosRight2">
                                                            <label class="form-check-label" for="formRadiosRight2">
                                                                Form Radio Right checked
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Switches</h4>
                                        <p class="card-title-desc">A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.</p>
                                        <div class="form-check form-switch mb-3" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="customSwitch1" checked>
                                            <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
                                        </div>
                                        <div class="form-check form-switch" dir="ltr">
                                            <input type="checkbox" class="form-check-input" disabled id="customSwitch2">
                                            <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">File browser</h4>
                                        <p class="card-title-desc">The file input is the most gnarly of the bunch and requires additional JavaScript if you’d like to hook them up with functional <em>Choose file…</em> and selected file name text.</p>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="customFile">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
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

        <!-- bs custom file input plugin -->
        <script src="assets/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>

        <script src="assets/js/pages/form-element.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
