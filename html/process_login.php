<?php

require_once '../database/accountDAO.php'; 
require_once '../database/common.php'; 

var_dump($_POST);
var_dump($_GET);


if( isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Authenticate
    $dao = new AccountDAO();
    $isValid = $dao->authenticate($username, $password);

    if( $isValid ) {
        $_SESSION['username'] = $username;
        header('Location: 3mainpage.html');
        return;
    }
    else {
        $msg = "Authentication Failed";
        $_SESSION['error'] = $msg;
        header('Location: 1login.php');
        return;
    }
}


?>