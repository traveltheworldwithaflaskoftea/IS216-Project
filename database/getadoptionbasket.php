<?php

require_once 'common.php';

// $user_id = $_SESSION['user_id']; We use this once the sessions are set up 
$user_id = $_SESSION['username'];

// 
$dao = new AccountDAO();
$result = $dao->getadoptionbasket($user_id);

//
$postJSON = json_encode($result);
echo $postJSON;

?>