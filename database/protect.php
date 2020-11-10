<?php
    if ( !isset($_SESSION['username']) ) {
        // No session var ==> no login 
        //Redirect to log in page 
        header("Location: ../html/1login.php"); 
        exit; 
    }
?>