
<?php

require_once('model/user.php');
function newUser($post){

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$passwordcode = hash('sha256', $password); 

$code = substr(hash('md5',$pseudo), -4);

$newpseudo= $pseudo.'#'.$code;
$user_data = User::addNewUser($email,$newpseudo,$passwordcode);


header("Location: ./view/signOnValidation.php?pseudo=$newpseudo");
exit();
}



