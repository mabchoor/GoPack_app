<?php

//fetch_user.php

include('../classes/chat.php');

session_start();
$_GET['iduti']='client';
	$status = '';
	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($_GET['iduti'], $access);
    $sql="select * from utilisateur where user_id='".$_GET['iduti']."';";
    $access->query($sql);
    $access->execute();
    $row=$access->one();
	if($user_last_activity > $current_timestamp)
	{
		$status = 'Online';
	}
	else
	{
		$status = 'Offline';
	}
	$output = '
    
	
		<td>'.$row->Username.' '.count_unseen_message($_GET['iduti'], $_SESSION['iduti'], $access).' '.fetch_is_type_status($row->User_id, $access).'</td>
		<td>'.$status.'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$_GET['iduti'].'" data-tousername="'.$row->Username.'">Start Chat</button></td>
	
	';
    echo '
    <center>
    <div class="row">
    <div class="col-md-6 col-xl-3">

        <!-- Simple card -->
        <div class="card">
            <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">start a chat</h4>
                <p class="card-text"><span>'.$row->Username.' '.count_unseen_message($_GET['iduti'], $_SESSION['iduti'], $access).' '.fetch_is_type_status($row->User_id, $access).'</span>
                <span>'.$status.'</span></p>
                <a href="#" class="btn btn-primary waves-effect waves-light">Button</a>
                <button type="button" class="btn btn-primary waves-effect waves-light start_chat" data-touserid="'.$_GET['iduti'].'" data-tousername="'.$row->Username.'">Start Chat</button>
            </div>
        </div>

    </div>
    </center>
';




?>