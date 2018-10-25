<?php
// require files to import needed funcs 
    require_once("database.php");
    require_once("contacts.php");
//get pointer to db connection
    $link = db_connect();
//call delete function 
    $contacts = contact_delete($link, $_POST['id']);
// come back to main page
    header('Location: /');

?>