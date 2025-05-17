<?php

//fetch_user.php

include('../classes/chat.php');

session_start();

$query = "
SELECT * FROM utilisateur 
WHERE User_id != '".$_SESSION['iduti']."' 
";

$statement = $access->query($query);

$access->execute();

$result = $access->result();

$output = '
<table class="table table-bordered table-striped">
	<tr>
		<th width="70%">Username</td>
		<th width="20%">Status</td>
		<th width="10%">Action</td>
	</tr>
';

foreach($result as $row)
{
	$status = '';
	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($row->User_id, $access);
	if($user_last_activity > $current_timestamp)
	{
		$status = '<span class="label label-success">Online</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Offline</span>';
	}
	$output .= '
	<tr>
		<td>'.$row->Username.' '.count_unseen_message($row->User_id, $_SESSION['iduti'], $access).' '.fetch_is_type_status($row->User_id, $access).'</td>
		<td>'.$status.'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row->User_id.'" data-tousername="'.$row->Username.'">Start Chat</button></td>
	</tr>
	';
}

$output .= '</table>';

echo $output;

?>