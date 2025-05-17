<?php

//database_accession.php

require_once('pdo.php');
$access =new database();

date_default_timezone_set('Africa/Casablanca');

function fetch_user_last_activity($user_id, $access)
{
	$query = "
	SELECT * FROM login_details 
	WHERE user = '$user_id' 
	ORDER BY lastactivity DESC 
	LIMIT 1
	";
	$statement = $access->query($query);
	$access->execute();
	$result = $access->result();
	foreach($result as $row)
	{
		return $row->lastactivity;
	}
}

function fetch_user_chat_history($emetteur, $recepteur, $access)
{
	$query = "
	SELECT * FROM message
	WHERE (emetteur = '".$emetteur."' 
	AND recepteur = '".$recepteur."') 
	OR (emetteur = '".$recepteur."' 
	AND recepteur = '".$emetteur."') 
	ORDER BY date DESC
	";

    $statement = $access->query($query);
	$access->execute();
	$result = $access->result();
	
	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		$dynamic_background = '';
		$message= '';
		if($row->emetteur == $emetteur)
		{
			if($row->status == '2')
			{
		
				$message= '<em>This message has been removed</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				$message= $row->message;
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row->message_id.'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			

			$dynamic_background = 'background-color:#ffe6e6;';
		}
		else
		{
			if($row->status == '2')
			{
				$message= '<em>This message has been removed</em>';
			}
			else
			{
				$message= $row->message;
			}
			$user_name = '<b class="text-danger">'.get_user_name($row->emetteur, $access).'</b>';
			$dynamic_background = 'background-color:#ffffe6;';
		}
		$output .= '
		<li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$message.'
				<div align="right">
					- <small><em>'.$row->date.'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	$query = "
	UPDATE message
	SET status = '0' 
	WHERE emetteur = '".$recepteur."' 
	AND recepteur = '".$emetteur."' 
	AND status = '1'
	";
	$statement = $access->query($query);
	$access->execute();
	return $output;
}

function get_user_name($user_id, $access)
{
	$query = "SELECT username FROM utilisateur WHERE User_id = '$user_id'";

    $statement = $access->query($query);
	$access->execute();
	$result = $access->one();
	
	foreach($result as $row)
	{
	
		return $row;
	}
}

function count_unseen_message($emetteur, $recepteur, $access)
{
	$query = "
	SELECT * FROM message
	WHERE emetteur = '$emetteur' 
	AND recepteur = '$recepteur' 
	AND status = '1'
	";
	$statement = $access->query($query);
	$statement=$access->execute();
	
	$count = $access->_statement->RowCount();
	
	$output = '';
	if($count > 0)
	{
		$output = '<span class="label label-success">'.$count.'</span>';
	}
	return $output;
}

function fetch_is_type_status($user_id, $access)
{
	$query = "
	SELECT status FROM login_details 
	WHERE user = '".$user_id."' 
	ORDER BY lastactivity DESC 
	LIMIT 1
	";	
	$statement = $access->query($query);
	$access->execute();
	$result = $access->result();
	$output = '';
	foreach($result as $row)
	{
		if($row->status == '0')
		{
			$output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
		}
	}
	return $output;
}

function fetch_group_chat_history($access)
{
	$query = "
	SELECT * FROM message
	WHERE recepteur = '0'  
	ORDER BY timestamp DESC
	";

	$statement = $access->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		$dynamic_background = '';
		$message= '';
		if($row->emetteur == $_SESSION["iduti"])
		{
			if($row->status == '2')
			{
				$message= '<em>This message has been removed</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				$message= $row->message;
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row->chat_message_id.'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			
			$dynamic_background = 'background-color:#ffe6e6;';
		}
		else
		{
			if($row->status == '2')
			{
				$message= '<em>This message has been removed</em>';
			}
			else
			{
				$chat_message = $row->message;
			}
			$user_name = '<b class="text-danger">'.get_user_name($row->emetteur, $access).'</b>';
			$dynamic_background = 'background-color:#ffffe6;';
		}

		$output .= '

		<li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$chat_message.' 
				<div align="right">
					- <small><em>'.$row->date.'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	return $output;
}


?>