<?php
// require files to import needed funcs
    require_once("models/database.php");
    require_once("models/contacts.php");
//get pointer to db connection
    $link = db_connect();
//take contacts by search
    $contacts = contact_search($link, $_GET['string']);
//render search result page
    include ("views/search.php");
?>
