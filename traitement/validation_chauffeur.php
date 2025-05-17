<?php 
session_start();
require('../classes/pdo.php');
require('../classes/chauffeur.php');
$id=$_GET['id_chauff'];
 validationchauffeur_admin($id);
 
 
 header('Location: ../admin/drivers.php');