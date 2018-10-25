<?php
// require files to import needed funcs
    require_once("database.php");
    require_once("contacts.php");
//get pointer to db connection
    $link = db_connect();
//call update function 
    $contacts = contact_update($link, $_POST['id'], $_POST['name'], $_POST['phone'], $_POST['email']);
// come back to main page
    header('Location: /');

?>