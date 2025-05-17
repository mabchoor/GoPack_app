<?php 

require_once('pdo.php');
require_once('database.php');

 function connecter($username,$password){
    $access = new database();
$sql="select * from utilisateur where username='".$username."'and password='".$password."' " ;
$access->query($sql);
$access->execute();
$count = $access->_statement->RowCount();

if($count==1){
    $_SESSION['iduti']=$access->one()->User_id;
   $one=$access->one();
    $_SESSION['username'] = $access->one()->Username;
    $sub_sql="INSERT INTO login_details 
    (user) 
    VALUES ('".$access->one()->User_id."')
   ";
   $access->query($sub_sql);
   $access->execute();
 
    if($one->role==0){
        $req="select * from administrateur where user_id='".$_SESSION['iduti']."';";
        
        $access->query($req);
        $access->execute();
        
        $_SESSION['id_admin']=$access->one()->admin_id;
        
        header("Location: ../admin/index.php");
    }
    if($one->role==1){
        $req="select * from chauffeur where user_id='".$_SESSION['iduti']."';";
        
        $access->query($req);
        $access->execute();
        
        $_SESSION['id_chauffeur']=$access->one()->Chauffeur_id;
        $_SESSION['chauffeur']=$access->one()->disponible;
        if($access->one()->disponible=='0') { 
           

            header("Location: ../chauffeur/index.php");
        }
       
        header("Location: ../chauffeur/index.php");

    }
    if($one->role==2){
        $req="select * from client where user='".$_SESSION['iduti']."';";

        $access->query($req);
        $access->execute();
      
        $_SESSION['client_id']=$access->one()->client_id;
        $_SESSION['client']=$access->one()->dispo='0';
        if($access->one()->dispo=='0') { 
           

            header("Location: ../client/profile.php");
        }
       header("Location: ../client/index.php");
        
    }

}
}
  function deconnexion(){
    $access = new database();
    session_destroy();
}

 function inscriptionClient($nom,$prenom,$ville,$password,$image,$username,$email,$phone){ 
    $access = new database();
    $userid=uniqid("cli_", true);
    
    $sql="insert into utilisateur (User_id,Nom,Prenom,password,Ville,Username,Email,Phone,image,role) values
    ('".$userid."', '".$nom."','".$prenom."','".$password."','".$ville."','".$username."','".$email."','".$phone."','".$image."','1')";
    $access->query($sql);
    $access->execute();
    $req="insert into client (disponible,User) values('0','".$userid."')";
    $access->query($req);
    $access->execute();  
}

 function inscriptionChauffeur($nom,$prenom,$ville,$password,$image,$username,$email,$phone){
    $access = new database();
    $userid=uniqid("chauf_", true);
    echo $userid;
    $sql="insert into utilisateur (User_id,Nom,Prenom,password,Ville,Username,Email,Phone,image,role) values
    ('".$userid."', '".$nom."','".$prenom."','".$password."','".$ville."','".$username."','".$email."','".$phone."','".$image."','1')";
    $access->query($sql);
    $access->result();
    $req="insert into chauffeur (User_id,disponible) values('".$userid."','0')";
    $access->query($req);
    $access->execute();  
}

function login($email, $passwd){

    $access = new database();
$sql="SELECT * FROM utilisateur WHERE email = '".$email."' AND password = '".$passwd."' " ;
$access->query($sql);
$access->execute();



$count = $access->_statement->RowCount();


if($count==1){
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_email"] = $user["mail"];
    $_SESSION["role"] = $user["role"];
    return true;
}

else {
    // If user does not exist in the database, return false
    return false;
}
  
}

function is_blacklisted($id) {
    

try {
    $access = new database();
    $sql="SELECT * FROM black_list WHERE user = '".$id."'" ;
    $access->query($sql);
    $access->execute();
    
    
    
    $count = $access->_statement->RowCount();
    
    
    if($count==1){
        return true; 
    } else {
        return false; 
    }
  } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      return false; 
  }
}
function getPasswordByEmail($email) {

try {
    $access = new database();
    $sql="SELECT password FROM utilisateur WHERE email = '".$email."'" ;
    $access->query($sql);
    $access->execute();
  
    $count = $access->_statement->RowCount();

    if($count==1){
        $_SESSION['iduti']=$result['User_id'];
        return $result['password'];

    } else {
        return null; 
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    return null;
}
}
