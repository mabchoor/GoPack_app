<?php require('navbar.php');
?>
<<div class="main-content">

<div class="page-content">
<div class="container-fluid">

                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="To admin" disabled>
                                    </div>

                                    
                                    <div class="mb-3">
                                        
                                            <textarea id="elm1" class="form-control" name="area"></textarea>
                                            <div class="modal-footer">
                             
                                <button type="submit" name="submit" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
                            </div>
                                        
                                    </div>

                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                </div>
                </div>
                
<?php 
if(isset($_POST['submit'])){
    $message=$_POST['area'];
    contactadmin($message);

}
?>