<?php 

$password_length = $_GET['password_length'];
$upper_chars = array("A","B","C","D","E","F","G","H","J","K","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
$lower_chars = array("a","b","c","d","e","f","g","h","j","k","m","n","p","q","r","s","t","u","v","w","x","y","z");
$numbers = array("2","3","4","5","6","7","8","9");
$symbols = array("!","#","$","%","&","*","+","-","?","@");

$array_password= array_merge($upper_chars,$lower_chars,$numbers,$symbols);


    
for($i=0; $i <= $password_length; $i++){
    $randomIndex = rand(0, 64);
    $password = $password . $array_password[$randomIndex];

};







