<?php

date_default_timezone_set('Europe/Paris');

require_once('controller/conversationController.php');
require_once('controller/friendController.php');
require_once('controller/loginController.php');
require_once ('controller/contactController.php');
require_once ('controller/signOnController.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':
            if (!empty($_POST)) {
                login($_POST);
            } else {
                loginPage();
            }
            break;

        case 'logout':
            logout();
            break;

        case 'signon':
            if (!empty($_POST)) {
                newUser($_POST);
            } 
            break; 
        

        case 'conversation':
            conversationPage();
            break;

        case 'friend':
            friendPage();
            break;

        //case 'contact':
            //if (!empty($_POST)) {
            //    submit($_POST);
            //}
            //break;
    //}

        case 'homepage':
            homePage();
            break;

        case 'newserver':
            newServer();
            break;   
    }

} else {
    $user_id = $_SESSION['user_id'] ?? false;

    if ($user_id) {
        friendPage();
    } else {
        loginPage();
    }
}
