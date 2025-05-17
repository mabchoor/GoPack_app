
<?php
 require_once ('../classes/database.php');
 $db = new Database2();
 session_start();
 // Get the value of the 'q' parameter from the query string
 
 // Query the database to fetch user data based on the selected value
 $result = $db->query("SELECT * FROM utilisateur WHERE User_id = '".$_SESSION['iduti']."'");
 $user = $db->fetch($result);
 
 // Check if user data is found
 if (!empty($user)) {
     $userId = isset($user["User_id"]) ? $user["User_id"] : "N/A";
     $name = isset($user["Nom"]) ? $user["Nom"] : "N/A";
     $prenom = isset($user["Prenom"]) ? $user["Prenom"] : "N/A";
     $Email = isset($user["Email"]) ? $user["Email"] : "N/A";
     $img = isset($user["Image"]) ? $user["Image"] : "N/A";
     $role = isset($user["role"]) ? $user["role"] : "N/A";
     
    

 
 // Close the database connection
 $db->close();
 ?>
<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="<?php
            echo $img ;?>" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1"><?php
            echo $name.' '.$prenom ;?></h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>
                    <?php 
                    if($role=='1'){
                        echo '<div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Driver Portal</li>

                            <li>
                                <a href="dashboard.html" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html" class=" waves-effect">
                                    <i class="ri-calendar-2-line"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                
                            <li>
                                <a href="mails.html" class=" waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Email</span>
                                </a>
                             
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="fas fa-shipping-fast"></i>
                                    <span>Shipments</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                    <a href="new-shipment.html" class=" waves-effect">
                                        Shipments Requested</a>
                                    <a href="new-shipment.html" class=" waves-effect">Delivery Tracker
                                        </a>
                                    </li>


                                    
                                </ul>
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
                                            <a href="calendar.html" class=" waves-effect">
                                                Contact</a>
                                                <a href="calendar.html" class=" waves-effect">Settings
                                                </a>
                                                <a href="calendar.html" class=" waves-effect">Assistance
                                                </a>
                                    </li>


                                    
                                </ul>
                            </li>

                        </ul>
                    </div>';
                         }
                         elseif($role=='0'){
echo '<div id="sidebar-menu">
<!-- Left Menu Start -->
<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Client Portal</li>

    <li>
        <a href="dashboard.html" class="waves-effect">
            <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
            <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a href="calendar.html" class=" waves-effect">
            <i class="ri-calendar-2-line"></i>
            <span>Calendar</span>
        </a>
    </li>

    <li>
        <a href="mails.html" class=" waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Email</span>
        </a>
     
    </li>
    
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-dropbox-fill"></i>
            <span>Managing Shipments</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
            <li>
            <a href="new-shipment.html" class=" waves-effect">
                Shipments Requests</a>
                    <a href="new-shipment.html" class=" waves-effect">
                        In-Process Requested</a>
<a href="new-shipment.html" class=" waves-effect">
                    Shipments Deliveries</a>                                    
        </ul>
    </li> <li>
        <a href="mails.html" class=" waves-effect">
            <i class="fas fa-shipping-fast "></i>
            <span>Managing Drivers</span>
        </a>
     
    </li>
    <li>
        <a href="mails.html" class=" waves-effect">
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
                    <a href="calendar.html" class=" waves-effect">
                        Contact</a>
                        <a href="calendar.html" class=" waves-effect">Settings
                        </a>
                        <a href="calendar.html" class=" waves-effect">Assistance
                        </a>
            </li>


            
        </ul>
    </li>

</ul>
</div>';
                        }
                        elseif($role=='2'){
echo '<div id="sidebar-menu">
<!-- Left Menu Start -->
<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Client Portal</li>

    <li>
        <a href="dashboard.php" class="waves-effect">
            <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
            <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a href="calendar.html" class=" waves-effect">
            <i class="ri-calendar-2-line"></i>
            <span>Calendar</span>
        </a>
    </li>

    <li>
        <a href="mails.html" class=" waves-effect">
            <i class="ri-mail-send-line"></i>
            <span>Email</span>
        </a>
     
    </li>
    
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fas fa-shipping-fast"></i>
            <span>Shipments</span>
        </a>
        <ul class="sub-menu" aria-expanded="true">
            <li>
            <a href="new-shipment.php" class=" waves-effect">
                New Shipment</a>
            <a href="new-shipment.html" class=" waves-effect">Delivery Tracker
                </a>
            </li>


            
        </ul>
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
                    <a href="calendar.html" class=" waves-effect">
                        Contact</a>
                        <a href="calendar.html" class=" waves-effect">Settings
                        </a>
                        <a href="calendar.html" class=" waves-effect">Assistance
                        </a>
            </li>


            
        </ul>
    </li>

</ul>
</div>';
                        }
                   
                    ?>
                    <!--- Sidemenu -->
                    
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <?php
 } else {
     // logouuuuuut
 }
 ?>