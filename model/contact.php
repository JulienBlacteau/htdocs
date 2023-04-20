<?php
require_once('database.php');
class ContactModel
{
    public function saveContact($name, $email, $subject, $message)
    {
        $db = init_db();

        $stmt = $db->prepare('INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)');
        $stmt->execute([$name, $email, $subject, $message]);
    }
}
