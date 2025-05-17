<?php

//remove_chat.php

include('../classes/chat.php');

if(isset($_POST["chat_message_id"]))
{
	$query = "
	UPDATE message 
	SET status = '2' 
	WHERE message_id = '".$_POST["chat_message_id"]."'
	";

	$statement = $access->query($query);

	$access->execute();
}

?>