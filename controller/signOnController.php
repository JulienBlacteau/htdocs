
<?php

require_once('model/user.php');
function newUser($post){
// on récupére les valeurs du formulaire écrite dans 'name'
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];

$passwordcode = hash('sha256', $password); //pour un mot de password hashé

$code = substr(hash('md5',$pseudo), -4); //

$newpseudo= $pseudo.'#'.$code;
$user_data = User::addNewUser($email,$newpseudo,$passwordcode);


header("Location: view/signOnvalidation.php?pseudo=$newpseudo");
exit();
}



