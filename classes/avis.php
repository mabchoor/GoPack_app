<?php 
require('pdo.php');
function afficheravis(){
    $access=new database();
    $sql="SELECT commentaire ,username,date_avis 
    FROM `avis_client` join utilisateur join client 
    on avis_client.client=client.client_id and utilisateur.User_id=client.User;";
    $access->query($sql);
    $access->execute();
    return $access->result();
}