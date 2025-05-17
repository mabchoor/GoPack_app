<?php require_once('navbar.php');?>
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Data Tables</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">new-shipment</li>
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

                                        <h4 class="card-title">shipment request</h4>
                                    

                                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>client</th>
                                                    <th>destination</th>
                                                    <th>date proposé</th>
                                                    <th>date limite</th>
                                                    <th>prix proposé</th>
                                                    <th>accept|offer</th>
                                                   
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <?php 
                                                $result=shipement_request();
                                                foreach($result as $data){
                                                ?>
                                                <tr>
                                                    <td><?php echo $data->Username?></td>
                                                    <td><?php echo $data->destination;?></td>
                                                    <td><?php echo $data->date_demande;?></td>
                                                    <td><?php echo $data->date_limite?></td>
                                                    <td><?php echo $data->prix_demande;?></td>
                                                    
                                                    <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" href="viewdetails.php?demande_id=<?php echo $data->demande_id;?>" title="Edit">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                            </a>
                                                        
                                                        </td>
  
                                                    
                                                </tr>
                                                <?php }  ?>
                                            </tbody>
                                        </table>
                                    
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row
                         </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © PAckGo.
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