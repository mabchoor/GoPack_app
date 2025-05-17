<?php 
require_once('pdo.php');

    function visiteprofileclient(){
        /*create view client_details as select * from client join utilisateur on client.user=utilisateur.User_id;
           and chauffeur.Chauffeur_id=validation_chauffeur.chauffeur;
*/$access=new database();
    $sql="SELECT * FROM client_details where user_id='".$_SESSION['iduti']."'";
    $access->query($sql);
    $access->execute();
    return $access->result();

    }
     function editprofileclient($useername,$ville,$username,$phone,$password,$addresse){
        $access=new database();
        $sql= "update  utilisateur set ville='".$ville."',Username='".$username."',phone='".$phone."' password='".password_hash($password, PASSWORD_DEFAULT)."'where  user_id='".$_SESSION['iduti']."' ";
        $access->query($sql);
        $access->execute();
        $query="update  client set addresse_client='".$addresse."'where client_id='".$_SESSION['client_id']."'";
        $access->query($query);
        $access->execute();
     }
     function validationadminclient($id){
        $access=new database();
        $sql="update client set dispo='1' where client_id='".$id."';";
        $access->query($sql);
        $access->execute();
    }
    function blacklist($id){  
        $access=new database();
        $sql="update client set dispo='-1' where client_id='".$id."';";
        
        $access->query($sql);
        $access->execute();
    }
    function afficherclient(){
        $access=new database();
        $sql="select * from utilisateur join client on utilisateur.User_id=client.User;";
        $access->query($sql);
        $access->execute();
        return $access->result();
    }
  

