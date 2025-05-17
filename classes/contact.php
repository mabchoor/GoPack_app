<?php
require_once('pdo.php');

function Unopened_Messages(){
    $access=new database();
    $sql="select count(message) as uno from contact where status='0'";
    $access->query($sql);
    $access->execute();
    return $access->one();
}
//status =1 si les messages vues
function contactadmin($message){
    $access=new database();
    $sql="insert into contact (id_emetteur,role,message) values('".$_SESSION['iduti']."','1','".$message."')";
    $access->query($sql) ;
        // renvoie une réponse JSON contenant les données insérées
       
      //  echo json_encode($data);

    $access->execute();
}
function read(){
    $access=new database();
    $sql="select *  from contact ";
    $access->query($sql);
    $access->execute();
    return $access->result();
}
function update_unopened($id){
    $access=new database();
    $sql="update contact set status='0' where id_contact=".$id.";";
    $access->query($sql);
    $access->execute();
    return $access->result();
}
function role($id){
    $access=new database();
    $sql="select role from utilisateur where user_id='".$id."';";
    $access->query($sql);
    $access->execute();
    if ($access->one()->role=='1') return '"bg-danger badge me-2"';
    if($access->one()->role=='2') return '"bg-primary badge me-2"';
}
function read_all(){
    $access=new database();
    $sql="select *  from contact where status='0'";
    $access->query($sql);
    $access->execute();
    return $access->result();
}
function emetteur($id){
    $access=new database();
    $sql="select * from contact where id_contact= '".$id."';";
    $access->query($sql);
    $access->execute();
    return $access->one();
}
function readmessage($id){
    $access=new database();
    $sql="select * from utilisateur where user_id= '".$id."';";
    $access->query($sql);
    $access->execute();
    return $access->one();
}

?>