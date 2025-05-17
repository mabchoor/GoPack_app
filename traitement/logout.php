<?php

 
session_start();
//connexion::deconnexion;
session_destroy();
 header("Location: ../login.php");
//("location :login.php" );
