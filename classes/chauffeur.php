<?php
require_once('pdo.php');

     function visiteprofile(){
        /*create VIEW chauffeur_etails as select chauffeur.chauffeur_id 
        ,chauffeur.disponible,validation_chauffeur.validation_id,
        validation_chauffeur.permis_conduit,validation_chauffeur.carte_grise,
        validation_chauffeur.capacite_vehicule,validation_chauffeur.type_vehicule,
        validation_chauffeur.etat_chauffeur ,validation_chauffeur.CIN, utilisateur.User_id,
        utilisateur.Nom,utilisateur.Prenom,utilisateur.Ville,utilisateur.phone,utilisateur.image 
        from utilisateur JOIN chauffeur join validation_chauffeur ON utilisateur.User_id=chauffeur.user_id 
        and chauffeur.Chauffeur_id=validation_chauffeur.chauffeur;
*/
$access=new database();
    $sql="SELECT * FROM chauffeur_etails where user_id='".$_SESSION['iduti']."'";
    $access->query($sql);
    $access->execute();
    return $access->result();

    }
     function editprofile($useername,$ville,$username,$phone,$password,$etat){
        $access=new database();
        $sql= "update  utilisateur set ville='".$ville."',Username='".$username."',phone='".$phone."',password='".password_hash($password, PASSWORD_DEFAULT)."' where  user_id='".$_SESSION['iduti']."' ";
        $access->query($sql);
        $access->execute();
      
        
        $query="update  validation_chauffeur set etat_chauffeur='".$etat."'where chauffeur='".$_SESSION['id_chauffeur']."'";
        $access->query($query);
        $access->execute();
        }
     function validationadmin(){
        $access=new database();
        $sql="update chauffeur set disponible='1' where User_id='".$_SESSION['iduti']."';";
        $access->query($sql);
        $access->execute();
    }
   
     function validationchauffeur(){
        $access=new database();
    $sql="update validation_chauffeur set etat_chauffeur='0'  where chauffeur='".$_SESSION['id_chauffeur']."';";
    $access->query($sql);
    $access->execute();
    
    }
    function validationchauffeur_admin($id_chauffeur){
        $access=new database();
    $sql="update chauffeur set disponible='1'  where chauffeur_id='".$id_chauffeur."';";
    $access->query($sql);
    $access->execute();
    
    }
    function afficherdrivers(){
        $access=new database();
        $sql="select * from utilisateur join chauffeur on utilisateur.User_id=chauffeur.User_id ;";
        $access->query($sql);
        $access->execute();
        return $access->result();
    }
    function etat_chauf($id){
        $access=new database();
       $sql="select etat_chauffeur as chauff from validation_chauffeur where chauffeur='".$id."';";
       $access->query($sql);
       $access->execute();
       return $access->one();
    }
    function blockdriver($id){
        $access=new database();
        $sql="update chauffeur set disponible='-1'  where chauffeur_id='".$id."';";
        $access->query($sql);
        $access->execute();
    
    }
    function afficherchauffeur(){

        $access=new database();

        $sql="select * from utilisateur where user_id='".$_SESSION['iduti']."' ;";
        $access->query($sql);
        $access->execute();
        return $access->one();
    }   
    
     function validationdocument(){}

