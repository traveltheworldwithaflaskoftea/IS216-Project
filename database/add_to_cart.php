<?php

require_once 'common.php';

$dog_id = $_POST['dog_id'];
var_dump("Dog id:" . $dog_id);
// $user_id = $_SESSION['user_id']; We use this once the sessions are set up 
$user_id = $_SESSION['username'];

// 
$dao = new AccountDAO();
$adoption_basket = $dao->getadoptionbasket($user_id);
var_dump("Initial dog basket: " . $adoption_basket);
// Check if dog alreay exists inside the basket
$basket_array = explode(",",$adoption_basket);
$is_exist = false;
foreach($basket_array as $value){
    if($value == $dog_id){
        $is_exist = true;
    }
} 
// If it doesn't exist. to reset '49569136, 49569131, 49569170, 49569168, 49569185'
if($is_exist == false){
    $new_adoption_basket = $adoption_basket . "," . $dog_id;
    $dao->updateAdoptionBasket($user_id,$new_adoption_basket);
    $adoption_basket = $dao->getadoptionbasket($user_id);
    var_dump("current dog basket: " . $adoption_basket);
}


$location = "Location: " . "../html/4individualpage.php" . "?id=" . $dog_id . "&" . "incart=true";

header($location);
return;
    
?>