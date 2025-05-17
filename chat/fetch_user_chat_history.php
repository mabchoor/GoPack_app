<?php

//fetch_user_chat_history.php

include('../classes/chat.php');

session_start();

echo fetch_user_chat_history($_SESSION['iduti'], $_POST['to_user_id'], $access);

?>