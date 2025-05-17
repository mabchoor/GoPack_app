<?php
require 'connexion\confige.php';
include 'connexion\functions.php';
require 'connexion\mail.php';


if (isset($_POST['Valider2'])) { 
    $prefix = "User_";
    $userId = uniqid($prefix);
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //$capacite = $_POST['capacite'];
    //$type = $_POST['type'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $photo = $_FILES['photo']['name'];
    //$gray_card= $_FILES['cart_evisite']['name'];
   // $licence= $_FILES['drive_lic']['name'];

    // Perform form validation
    if (empty($nom) || empty($prenom) || empty($ville) || empty($email) || empty($phone) || empty($password) || empty($cpassword) || empty($photo) || empty($code) ) { // Added check for $code
        echo '<script>
              alert("Error: Please fill in all fields and try again.");
              </script>';
    } elseif ($password !== $cpassword) {
        echo '<script>
              alert("Error: Password and Confirm Password do not match. Please try again.");
              </script>';
    } elseif (!isset($_COOKIE['email']) || $_COOKIE['email'] != $_POST['email']) { // Compare entered code with randomly generated code
        echo '<script>
              alert("Email is not verified. Please try again.");
              </script>';
    } else {
      $src=$_FILES['photo']['tmp_name'];
      $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
      $dest="http://localhost/final_mini_projet/User/profiles/".$userId."_profile.".$ext;
      move_uploaded_file($src,$dest);
     $driver=uniqid("driver_");
     /*  $path="../Users/Validations/".$driver;
      mkdir($path, 0777);
      
      $src2=$_FILES['photo']['tmp_name'];
      $ext2 = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
      $dest2=$path.$driver."_profile.".$ext;
      move_uploaded_file($src2,$dest2);

      $src3=$_FILES['photo']['tmp_name'];
      $ext3 = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
      $dest3=$path.$driver."_profile.".$ext;
      move_uploaded_file($src3,$dest3);

    $src2=$_FILES['cin']['tmp_name'];
      $ext2 = pathinfo($_FILES['cin']['name'], PATHINFO_EXTENSION);
      $dest2="../Users/Clients_CIN/".$userId."_CIN_Client.".$ext;
      move_uploaded_file($src2,$dest2)*/    
      adduser($userId,$nom,$prenom,$ville,$email,$phone,md5($password),$dest,'1');
    addDriver($userId,$driver);
    header("Location: login.php");
    }
}

$send=null;function generateExpiredCode() {
  // Generate random number
  $randomNumber = mt_rand(100000, 999999);

  // Get current timestamp
  $currentTimestamp = time();

  // Calculate timestamp after 1 minute
  $expiredTimestamp = $currentTimestamp + 60; // 60 seconds = 1 minute

  // Store the generated code and the expired timestamp in an array
  $codeData = array(
      'code' => $randomNumber,
      'expired_timestamp' => $expiredTimestamp
  );

  // Set the generated code and expired timestamp as cookies
  setcookie('code', $randomNumber, $expiredTimestamp);
  setcookie('expired_timestamp', $expiredTimestamp, $expiredTimestamp);

  // Return the code data
  return $codeData;
}


// Check if "resend" button is clicked
if (isset($_POST['resend'])) {
  $email = $_POST['email'];
        $stmt = $conn->prepare("SELECT email FROM utilisateur WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
          echo '<script>alert("Error: Email already exists.");</script>';
          // You can add further actions or error handling here
        } else {
            // Proceed with further actions if email doesn't exist
            // Call function to send email
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
            
            // Generate new code and set it as a cookie
            $codeData = generateExpiredCode();
            $newCode = $codeData['code'];
            setcookie('code', $newCode, $codeData['expired_timestamp']);
            $send = mailsend($_POST['email'], $newCode);
        }
}



if (isset($_POST['verify'])) {
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


  // Check if the entered code matches the code stored in the cookie
  if(isset($_COOKIE['expired_timestamp'])){
  
  if (isset($_POST['code']) && $_POST['code'] == $_COOKIE['code']) {
    // Check if the code has expired
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