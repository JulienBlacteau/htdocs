<?php
require_once('model/contact.php');

class ContactController
{
    public function submit($post)
    {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $user_data = ContactModel::saveContact($name, $email, $subject, $message);
        
    }
}