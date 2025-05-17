<?php require('navbar.php'); ?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Inbox</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contact</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <!-- Left sidebar -->
                <div class="email-leftbar card">
                    <div class="d-grid">
                        <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
                            message
                        </button>
                    </div>
                    <div class="mail-list mt-4">
                        <a href="#unread" class="active"><i class="mdi mdi-email-outline me-2"></i> Unopened_Messages <span class="ms-1 float-end"><?php echo Unopened_Messages()->uno?></span></a>
                        
                        <a href="#"><i class="mdi mdi-diamond-stone me-2"></i>all</a>
                    </div>


                    <h6 class="mt-4">Labels</h6>

                    <div class="mail-list mt-1">
        
                        <a href="#"><span class="mdi mdi-circle-outline text-primary float-end"></span>client</a>
                        <a href="#"><span class="mdi mdi-circle-outline text-danger float-end"></span>chauffeur</a>
                    </div>

                    
                </div>
                <!-- End Left sidebar -->


                <!-- Right Sidebar -->
                <div class="email-rightbar mb-3">
                    
                    <div class="card">
                        <ul class="message-list">
                        
                         
                            <?php 
                            $result=read();

                            foreach($result as $data){?>
                            <li class="<?php if($data->status=='1') echo "unread";?>">
                                                <div class="col-mail col-mail-1">
                                                    <div class="checkbox-wrapper-mail">
                                                        <input type="checkbox" id="chk3">
                                                        <label class="form-label" for="chk3" class="toggle"></label>
                                                    </div>
                                                    <a href="#" class="title">message</a><span class="star-toggle far fa-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <a href="readmessage.php?id_contact=<?php echo $data->id_contact?>" class="subject"><span class="<?php echo role($data->id_emetteur);?>">message</span><?php echo $data->message;?></span>
                                                    </a>
                                                    <div class="date col-3"><?php echo $data->date?></div>
                                                </div>
                                            </li>
                                            <?php }?>

                        </ul>
                        </div> <!-- card -->

                    </div> <!-- card -->


                </div> <!-- end Col-9 -->

            </div>

        </div><!-- End row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- Modal -->
<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="To">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <form method="post">
                            <textarea id="elm1" name="area"></textarea>
                        </form>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © PackGo.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by groupe a
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

</body>
</html>
