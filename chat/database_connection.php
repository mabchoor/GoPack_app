<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=db_livraison;charset=utf8mb4", "root", "");

date_default_timezone_set('Africa/Casablanca');

function fetch_user_last_activity($user_id, $connect)
{
	$query = "
	SELECT * FROM utilisateur_details 
	WHERE user_id = '$user_id' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['last_activity'];
	}
}

function fetch_user_chat_history($emetteur, $recepteur, $connect)
{
	$query = "
	SELECT * FROM message
	WHERE (emetteur = '".$emetteur."' 
	AND recepteur = '".$recepteur."') 
	OR (emetteur = '".$recepteur."' 
	AND recepteur = '".$emetteur."') 
	ORDER BY timestamp DESC
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		$dynamic_background = '';
		$message= '';
		if($row["emetteur"] == $emetteur)
		{
			if($row["status"] == '2')
			{
				$message= '<em>This message has been removed</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				$message= $row['chat_message'];
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			

			$dynamic_background = 'background-color:#ffe6e6;';
		}
		else
		{
			if($row["status"] == '2')
			{
				$message= '<em>This message has been removed</em>';
			}
			else
			{
				$message= $row["chat_message"];
			}
			$user_name = '<b class="text-danger">'.get_user_name($row['emetteur'], $connect).'</b>';
			$dynamic_background = 'background-color:#ffffe6;';
		}
		$output .= '
		<li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$chat_message.'
				<div align="right">
					- <small><em>'.$row['timestamp'].'</em></small>
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
	$statement = $connect->prepare($query);
	$statement->execute();
	return $output;
}

function get_user_name($user_id, $connect)
{
	$query = "SELECT username FROM utilisateur WHERE User_id = '$user_id'";
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row['Username'];
	}
}

function count_unseen_message($emetteur, $recepteur, $connect)
{
	$query = "
	SELECT * FROM message
	WHERE emetteur = '$emetteur' 
	AND recepteur = '$recepteur' 
	AND status = '1'
	";
	$statement = $connect->prepare($query);
	$statement->execute();
	$count = $statement->rowCount();
	$output = '';
	if($count > 0)
	{
		$output = '<span class="label label-success">'.$count.'</span>';
	}
	return $output;
}

function fetch_is_type_status($user_id, $connect)
{
	$query = "
	SELECT is_type FROM utilisateur_details 
	WHERE user_id = '".$user_id."' 
	ORDER BY last_activity DESC 
	LIMIT 1
	";	
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		if($row["is_type"] == 'yes')
		{
			$output = ' - <small><em><span class="text-muted">Typing...</span></em></small>';
		}
	}
	return $output;
}

function fetch_group_chat_history($connect)
{
	$query = "
	SELECT * FROM message
	WHERE recepteur = '0'  
	ORDER BY timestamp DESC
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		$dynamic_background = '';
		$message= '';
		if($row["emetteur"] == $_SESSION["user_id"])
		{
			if($row["status"] == '2')
			{
				$message= '<em>This message has been removed</em>';
				$user_name = '<b class="text-success">You</b>';
			}
			else
			{
				$message= $row["chat_message"];
				$user_name = '<button type="button" class="btn btn-danger btn-xs remove_chat" id="'.$row['chat_message_id'].'">x</button>&nbsp;<b class="text-success">You</b>';
			}
			
			$dynamic_background = 'background-color:#ffe6e6;';
		}
		else
		{
			if($row["status"] == '2')
			{
				$message= '<em>This message has been removed</em>';
			}
			else
			{
				$chat_message = $row["chat_message"];
			}
			$user_name = '<b class="text-danger">'.get_user_name($row['emetteur'], $connect).'</b>';
			$dynamic_background = 'background-color:#ffffe6;';
		}

		$output .= '

		<li style="border-bottom:1px dotted #ccc;padding-top:8px; padding-left:8px; padding-right:8px;'.$dynamic_background.'">
			<p>'.$user_name.' - '.$chat_message.' 
				<div align="right">
					- <small><em>'.$row['timestamp'].'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	return $output;
}


?>