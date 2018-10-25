<?php
// require files to import needed funcs
    require_once("database.php");
    require_once("contacts.php");
//get pointer to db connection
    $link = db_connect();
//call create func
    $contacts = contact_input($link, $_POST['name'], $_POST['phone'], $_POST['email']);
// come back to main page
    header('Location: /');

?>