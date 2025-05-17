<?php 
require('navbar.php');
$id=$_GET['id_contact'];
update_unopened($id);
?>
  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0"><?php $data=readmessage(emetteur($id)->id_emetteur);?></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">contact</a></li>
                                            <li class="breadcrumb-item active">Read message</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                                            <div class="d-flex mb-4">
                                                <img class="me-3 rounded-circle avatar-sm" src="<?php echo $data->Image?>" alt="Generic placeholder image">
                                                <div class="flex-1">
                                                    <h5 class="font-size-14 my-1"><?php echo $data->Nom."|".$data->Prenom?></h5>
                                                    <small class="text-muted"><?php echo $data->Email?></small>
                                                </div>
                                            </div>

                                    <p><?php echo emetteur($id)->message?>

                                           
                                            <hr/>

                                    </div>
                                </div>
</div>
</div>
</div>