<?php 
 // require files to import needed funcs
    require_once("models/database.php");
    require_once("models/contacts.php");
//get pointer to db connection
    $link = db_connect();
//take all contacts from db 
    $contacts = contacts_all($link);
//render index page
    include ("views/main.php");
 ?>