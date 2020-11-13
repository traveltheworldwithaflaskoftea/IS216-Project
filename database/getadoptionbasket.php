<?php

require_once 'common.php';
require_once 'accountDAO.php';

$user_id = $_SESSION['username'];

// 
$dao = new AccountDAO();
$result = $dao->getadoptionbasket($user_id);

//
$postJSON = json_encode($result);
echo $postJSON;

?>