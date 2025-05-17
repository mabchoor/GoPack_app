<?php

//group_chat.php

include('../classes/chat.php');

session_start();

if($_POST["action"] == "insert_data")
{
	$query = "
	INSERT INTO message 
	(emetteur, message, status) 
	VALUES (".$_SESSION["iduti"].",".$_POST['chat_message']." , '1');
	";

	$statement = $access->query($query);

	if($execute->execute())
	{
		echo fetch_group_chat_history($access);
	}

}

if($_POST["action"] == "fetch_data")
{
	echo fetch_group_chat_history($access);
}

?>