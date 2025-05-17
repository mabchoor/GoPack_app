<?php

//update_is_type_status.php

include('../classes/chat.php');

session_start();

$query = "
UPDATE login_details 
SET status = '".$_POST["is_type"]."' 
WHERE login_id = '".$_SESSION["login_details_id"]."'
";

$statement = $access->query($query);

$access->execute();

?>