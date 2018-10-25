<?php 
// require files to import needed funcs
    require_once("models/database.php");
    require_once("models/contacts.php");
//get pointer to db connection
    $link = db_connect();
//take a contact to edit  
    $contacts = contacts_getById($link, $_GET['id']);
//render update page
    include ("views/edit.php");
 ?>