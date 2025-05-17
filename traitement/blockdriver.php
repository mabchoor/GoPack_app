<?php 
session_start();
require('../classes/pdo.php');
require('../classes/chauffeur.php');
$id=$_GET['id_chauff'];
blockdriver($id);
 
 
 header('Location: ../admin/drivers.php');