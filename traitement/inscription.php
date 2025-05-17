<?php
//require_once('../classes/connexion.php');
//mabchour abderrahmane


 /*

if (isset($_POST['Valider']) ){ 
    session_start();
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $ville=$_POST['ville'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $Cpassword=$_POST['Cpassword'];

    $dest=$_FILES['photo']['name'];
    
    
    print_r($_POST);
    if ($_FILES['photo']['name']!=''){
        $src=$_FILES['photo']['tmp_name'];
        $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $dest="../assets/images/image_uti/".$role."_".$username.".".$ext;
       
        
         move_uploaded_file($src,$dest);
       
    
        
   

    $inscr=new connexion("zs0","jsk");
    $adresse="";
    if($role=='1'){
        
        $inscr->inscriptionChauffeur($nom,$prenom,$ville,password_hash($password, PASSWORD_DEFAULT),$dest,$username,$email,$phone);
        
        
    }else{
        $inscr->inscriptionClient($nom,$prenom,$ville,password_hash($password, PASSWORD_DEFAULT),$dest,$username,$email,$phone,$adresse);

    }
    //$inscr->
    //public function inscriptionChauffeur($usr_id,$nom,$prenom,$password,$image)

}
}*/

require ('connexion/confige.php');
include 'connexion/functions.php';
require 'connexion/mail.php';


if (isset($_POST['Valider'])) { 
    $prefix = "User_";
    $userId = uniqid($prefix);
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $photo = $_FILES['photo']['name'];
    $cin = $_FILES['cin']['name'];
    $address = $_POST['address'];

    if (empty($nom) || empty($prenom) || empty($ville) || empty($email) || empty($phone) || empty($password) || empty($cpassword) || empty($photo) || empty($cin) || empty($address) || empty($code)) { // Added check for $code
        echo '<script>
              alert("Error: Please fill in all fields and try again.");
              </script>';
    } elseif ($password !== $cpassword) {
        echo '<script>
              alert("Error: Password and Confirm Password do not match. Please try again.");
              </script>';
    } elseif (!isset($_COOKIE['email']) || $_COOKIE['email'] != $_POST['email']) { 
        echo '<script>
              alert("Email is not verified. Please try again.");
              </script>';
    } else {
          $src=$_FILES['photo']['tmp_name'];
          $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
          $dest="http://localhost/final_mini_projet/User/profiles/".$userId."_profile.".$ext;
          move_uploaded_file($src,$dest);
          
        adduser($userId,$nom,$prenom,$ville,$email,$phone,md5($password),$dest,'2');
        $src2=$_FILES['cin']['tmp_name'];
          $ext2 = pathinfo($_FILES['cin']['name'], PATHINFO_EXTENSION);
          $dest2="../Users/Clients_CIN/".$userId."_CIN_Client.".$ext;
          move_uploaded_file($src2,$dest2);
        addClient($userId,$dest2,$address);
        header("Location: auth-login.php");   
      }
}

if (isset($_POST['Valider2'])) { 
  echo '<script>
  alert("Email is not verified. Please try again.");
  </script>';
}

$send=null;function generateExpiredCode() {
  $randomNumber = mt_rand(100000, 999999);

  $currentTimestamp = time();

  $expiredTimestamp = $currentTimestamp + 60; // 60 seconds = 1 minute

  $codeData = array(
      'code' => $randomNumber,
      'expired_timestamp' => $expiredTimestamp
  );

  setcookie('code', $randomNumber, $expiredTimestamp);
  setcookie('expired_timestamp', $expiredTimestamp, $expiredTimestamp);

  return $codeData;
}


if (isset($_POST['resend'])) {
  $email = $_POST['email'];
        $stmt = $conn->prepare("SELECT email FROM utilisateur WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
          echo '<script>alert("Error: Email already exists.");</script>';
        } else {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $ville = $_POST['ville'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $photo = $_FILES['photo']['name'];
            $cin = $_FILES['cin']['name'];
            $address = $_POST['address'];
            $codeData = generateExpiredCode();
            $newCode = $codeData['code'];
            setcookie('code', $newCode, $codeData['expired_timestamp']);
            $send = mailsend($_POST['email'], $newCode);
        }
}



if (isset($_POST['verify'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $ville = $_POST['ville'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $photo = $_FILES['photo']['name'];
  $cin = $_FILES['cin']['name'];
  $address = $_POST['address'];

  if(isset($_COOKIE['expired_timestamp'])){
  
  if (isset($_POST['code']) && $_POST['code'] == $_COOKIE['code']) {
    $currentTimestamp = time();
    if ($currentTimestamp > $_COOKIE['expired_timestamp']) {
        echo '<script>alert("Code has expired.");</script>';
    } else {
        echo '<script>alert("Code is valid.");</script>';
        setcookie('email', $_POST['email'] , 0, '/');
    }
  } else {
    echo '<script>alert("Invalid code.");</script>';
  }}else{
    echo '<script>alert("Code has expired.");</script>';

  }
}

?>