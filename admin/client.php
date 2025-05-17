<?php require('navbar.php');?>
           <div class="main-content">

                <div class="page-content">
                     <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">clients</h4>
        
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>username</th>
                                                        <th>Email</th>
                                                        <th>ville</th>
                                                       
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                    
                                                $result=afficherclient();
                                                foreach($result as $data){


                                                ?>
                                                
                                                    <tr data-id="<?php echo $data->client_id;?>">
                                                        <td data-field="id"><?php echo $data->Username;?></td>
                                                        <td data-field="age"><?php echo $data->Email;?></td>
                                                        <td data-field="name"><?php echo $data->Ville;?></td>
                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" href="../traitement/validation_client.php?id_client=<?php echo $data->client_id?>" title="Edit">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                            </a>
                                                            <a class="btn btn-outline-secondary btn-sm edit" href="../traitement/blockclient.php?id_client=<?php echo $data->client_id?>" title="Edit">
                                                            
                                                            <i class="ri-forbid-2-line"></i>
                                                            </a>
                                                       
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                 
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
