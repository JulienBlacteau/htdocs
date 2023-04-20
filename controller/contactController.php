<?php
require_once('model/contact.php');

class ContactController
{
    public function submit($post)
    {
        //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // // $contactModel = new ContactModel();
            // $contactModel->saveContact($name, $email, $subject, $message);

            // $to = 'contact@discoding.com';
            // $subject = 'Nouveau message de contact';
            // $body = "Nom : $name\n";
            // $body .= "E-mail : $email\n";
            // $body .= "Sujet : $subject\n";
            // $body .= "Message :\n$message";
            // $headers = "From: $email";

            // mail($to, $subject, $body, $headers);
            $user_data = ContactModel::saveContact($name, $email, $subject, $message);
        
    }
}