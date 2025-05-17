<?php
include 'confige.php';


function adduser($id,$nom,$prenom ,$ville,$email,$phone,$password,$image,$role){
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    
try {
    $conn= $_SESSION["conn"];
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="insert into utilisateur (User_id,Nom,Prenom,password,Ville,Email,Phone,image,role) values
    ('".$id."', '".$nom."','".$prenom."','".$password."','".$ville."','".$email."','".$phone."','".$image."','".$role."')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    return true;
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    echo '<script>
    alert("'.$sql . "<br>" . $e->getMessage().'");
    </script>';
    return false;
  }
  

}
function addClient($id,$CIN,$addr){
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
      
  try {
      $conn= $_SESSION["conn"];
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="INSERT INTO `client` (`client_id`, `CIN`, `addresse_client`, `User`) VALUES (NULL, '".$CIN."', '".$addr."', '".$id."');";
      
      // use exec() because no results are returned
      $conn->exec($sql);
      return true;
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
      echo '<script>
      alert("'.$sql . "<br>" . $e->getMessage().'");
      </script>';
      return false;
    }
  
    }
    function adddriver($id,$driver){
      if (session_status() == PHP_SESSION_NONE) {
          session_start();
      }
      try {
          $conn= $_SESSION["conn"];
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="INSERT INTO `chauffeur` (`Chauffeur_id`, `User_id`, `disponible`) VALUES ( '".$driver."', '".$id."', '0');";
          
          // use exec() because no results are returned
          $conn->exec($sql);
          return true;
        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
          echo '<script>
          alert("'.$sql . "<br>" . $e->getMessage().'");
          </script>';
          return false;
        }
        
      
      }
      function inscwithoutvalidation($id,$driver){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
      
          
        
        }
       
        


        function login($email, $passwd){
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        try {
            $conn= $_SESSION["conn"];
              
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
              $stmt = $conn->prepare("SELECT * FROM utilisateur WHERE email = :email AND password = :passwd");
              $stmt->bindParam(':email', $email);
              $stmt->bindParam(':passwd', $passwd);
              $stmt->execute();
              
              $user = $stmt->fetch(PDO::FETCH_ASSOC);
      
              if ($user) {
                  // If user exists in the database, set session variables or perform any other necessary tasks
                  $_SESSION["user_id"] = $user["id"];
                  $_SESSION["user_email"] = $user["mail"];
                  $_SESSION["role"] = $user["role"];
                  return true;
              } else {
                  // If user does not exist in the database, return false
                  return false;
              }
      
          } catch(PDOException $e) {
              echo "Error: " . $e->getMessage();
              return false;
          }
      }
    
      function is_blacklisted($id) {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
      }
      try {
          $conn= $_SESSION["conn"];
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Prepare the SQL query
            $sql = "SELECT * FROM black_list WHERE user = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
            // Execute the query
            $stmt->execute();
    
            // Fetch the result
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // Check if the ID exists in the black_list table
            if ($result) {
                return true; // ID is blacklisted
            } else {
                return false; // ID is not blacklisted
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false in case of any error
        }
    }
    function getPasswordByEmail($email) {
      if (session_status() == PHP_SESSION_NONE) {
          session_start();
      }
      try {
          $conn = $_SESSION["conn"];
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
          // Prepare the SQL query
          $sql = "SELECT password FROM utilisateur WHERE email = :email"; // Replace 'users' with your actual table name
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  
          // Execute the query
          $stmt->execute();
          // Fetch the result
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
  
          // Check if the email exists in the users table
          if ($result) {
              return $result['password']; // Return the password
          } else {
              return null; // Return null if email does not exist
          }
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
          return null; // Return null in case of any error
      }
  }
  



?>