<?php

require_once '../database/common.php';

// Removing 1 session variable
if( isset($_SESSION['username']) ) {
    unset($_SESSION['username']);
}

// Unsetting or removing the current session
session_unset();

// Destroying the current session
session_destroy();

// Forward user to login.php
header('Location: 1login.php');
return;

?>