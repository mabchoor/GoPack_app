<?php

//insert_chat.php

include('../classes/chat.php');
//$conn = new database();

session_start();
$user=$_POST['to_user_id'];
$id= $_SESSION['iduti'];
echo $id;
$message=$_POST['chat_message'];


$query = "
INSERT INTO message 
(recepteur, emetteur, message, status) 
VALUES ('".$user."', '".$id."','".$message."', '1');
";
/*
 $access->query($query);*/
$access->query($query);
if($access->execute())
{
	echo fetch_user_chat_history($_SESSION['iduti'], $_POST['to_user_id'], $access);
}

?>