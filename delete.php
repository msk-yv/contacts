<?php 
// require files to import needed funcs
    require_once("models/database.php");
    require_once("models/contacts.php");
//get pointer to db connection
    $link = db_connect();
//take contact to delete  
    $contacts = contacts_getById($link, $_GET['id']);
//render view of delete page
    include ("views/delete.php");

 ?>