<?php

//update_last_activity.php

include('../classes/chat.php');

session_start();

$query = "
UPDATE login_details 
SET lastactivity = now() 
WHERE login_id = '".$_SESSION["login_details_id"]."'
";

$statement = $access->query($query);

$access->execute();

?>

