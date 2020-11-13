<?php
require_once 'common.php';
require_once 'accountDAO.php';

var_dump($_POST); 

$username = $_POST['username']; 
$name = $_POST['name']; 
$password = $_POST['password']; 
$email = $_POST['email'];  
$phone_number = $_POST['phone_number']; 
$postal_code = $_POST['postal_code'];  
$adoption_basket =''; 

$dao = new AccountDAO();
$new_user = $dao->add($username, $name, $password, $email, $phone_number, $postal_code, $adoption_basket); 

$location = "Location: " . "../html/3mainpage.php";
header($location);
return;

?>