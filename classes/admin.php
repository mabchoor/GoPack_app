<?php
require_once('pdo.php');

 
 
 function ajouteradmin($nom,$prenom,$ville,$password,$image,$username,$email,$phone){
      $access=new database();

    $userid=uniqid("admin_", true);
    $req="select email from utilisateur where email='".$email."';";
    $access->query($req);
    $access->execute();
    $count = $access->_statement->RowCount();
    $message=<<<section
    
    section;
if($count!=0){
echo $message;
header('Location:../admin/ajouteradmin.php');
}
else{
    $sql="insert into utilisateur (User_id,Nom,Prenom,password,Ville,Username,Email,Phone,image,role) values
    ('".$userid."', '".$nom."','".$prenom."','".$password."','".$ville."','".$username."','".$email."','".$phone."','".$image."','0')";
    $access->query($sql);
    $access->execute();
    //1==secondaire
    //print_r($access->result());
    $req="insert into administrateur (User_id,role) values('".$userid."','1')";
    $access->query($req);
    $access->execute();  
}
}
 function afficheradmin(){
     $access=new database();

    $sql="select * from utilisateur where user_id='".$_SESSION['iduti']."' ;";
    $access->query($sql);
    $access->execute();
    return $access->one();
}


//$pp->ajouteradmin('sahli','prenom','settat',password_hash('123', PASSWORD_DEFAULT),'','adminprincipale','salam@gmail.com','00000000');
