<?php

require_once 'common.php';

$dog_id = $_POST['dog_id'];
var_dump($_POST);
var_dump("Dog id:" . $dog_id);
// $user_id = $_SESSION['user_id']; We use this once the sessions are set up 
$user_id = $_SESSION['username'];

// 
$dao = new AccountDAO();
$adoption_basket = $dao->getadoptionbasket($user_id);
var_dump(gettype($adoption_basket));
var_dump("Initial dog basket: " . $adoption_basket);
$adoption_basket_array = explode(',',$adoption_basket);
// Check if dog alreay exists inside the basket
if (in_array($dog_id, $adoption_basket_array)) 
    {
    unset($adoption_basket_array[array_search($dog_id,$adoption_basket_array)]);
}
$adoption_basket_array =implode(',', $adoption_basket_array);
var_dump($adoption_basket_array);

// If it doesn't exist. to reset '49569136, 49569131, 49569170, 49569168, 49569185'
$dao->updateAdoptionBasket($user_id,$adoption_basket_array);
$adoption_basket = $dao->getadoptionbasket($user_id);
var_dump("current dog basket: " . $adoption_basket);


$location = "Location: " . "../html/8adoptionbasket.php";

header($location);
return;
    
?>