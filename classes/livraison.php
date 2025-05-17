<?php require_once('pdo.php');
function totalsales(){
    $access=new database();
    $sql="select sum(prix)as sum from livraison where etat='2';";
    $access->query($sql);
    $access->execute();
    return $access->one();
}
function intransit(){
    $access=new database();
    $sql="select sum(prix)as sum from livraison where etat='1';";
    $access->query($sql);
    $access->execute();
    return $access->one();
}
function delivered(){
    $access=new database();
    $sql="select count(prix)as sum from livraison where etat='2';";
    $access->query($sql);
    $access->execute();
    return $access->one();
}
//etat de livraison 0 en attente ,1 en cours,2 terminé
function in_progress(){
    $access=new database();
    $sql="select username,date,prix,date,time_serv,destination from livraison join utilisateur join chauffeur join demande on 
    utilisateur.user_id=chauffeur.user_id and chauffeur_id=chauffeur and demande=demande_id where
     livraison.etat='1'; 
    ";
    $access->query($sql);
    $access->execute();
    return $access->result();

}
function Daily_Sales(){
    $access=new database();
    $sql="select sum(prix)as sum from livraison where etat='2'and date<'".date('Y-m-d')."';";
    $access->query($sql);
    $access->execute();
    return $access->one();
}
function listdelivered(){
    $access=new database();
    $sql="select username as chauffeur ,prix,client, date_demande as start ,destination ,
    livraison.date as end from demande_client join chauffeur join livraison join utilisateur 
    ON utilisateur.User_id=chauffeur.User_id and chauffeur.Chauffeur_id=livraison.chauffeur 
    and livraison.demande=demande_client.Demande_id;";
    $access->query($sql);
    $access->execute();
    return $access->result();
 
}
function shipement_request(){
    $access= new database();
    $sql="SELECT prix_demande,date_limite,destination,username,date_demande,demande_id FROM client_detail join demande LEFT JOIN livraison ON client_detail.client_id=demande.cllient and livraison.demande = demande.Demande_id WHERE livraison.Demande IS NULL;";
    $access->query($sql);
    $access->execute();
    return $access->result();
}
//etat livraison  0,1 in process,2 terminé avec succés
function shipment_process(){
    $access= new database();
    $sql="SELECT chauffeur_detail.Username as chauffeur,demande_client.client as client ,livraison.date as date ,
    livraison.prix as prix ,demande_client.destination as destination FROM chauffeur_detail join 
    demande_client join livraison on livraison.demande=demande_client.Demande_id and 
    chauffeur_detail.chauffeur_id=livraison.chauffeur where livraison.etat='1' ;";
    //;";
    $access->query($sql);
    $access->execute();
    return $access->result(); 
}
function shipment_deliveries(){
    $access= new database();
    $sql="SELECT chauffeur_detail.Username as chauffeur,demande_client.client as client ,livraison.date as date ,
    livraison.prix as prix ,demande_client.destination as destination FROM chauffeur_detail join 
    demande_client join livraison on livraison.demande=demande_client.Demande_id and 
    chauffeur_detail.chauffeur_id=livraison.chauffeur where livraison.etat='2' ;";
    //;";
    $access->query($sql);
    $access->execute();
    return $access->result(); 
}