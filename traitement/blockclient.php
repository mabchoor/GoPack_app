<?php 
session_start();
require('../classes/pdo.php');
require('../classes/client.php');
$id=$_GET['id_client'];
blacklist($id);
 
 
 header('Location: ../admin/client.php');