<?php
require_once('../classes/connexion.php');



 

if (isset($_POST['valider']) ){ 
    session_start();
$use=$_POST['username'];
$pas=$_POST['password'];
//$_SESSION['id']=$username;


login($use,$pas); 



}
