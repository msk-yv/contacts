<?php 

    require_once("models/database.php");
    require_once("models/contacts.php");

    $link = db_connect();
  
    $contacts = contacts_getById($link, $_GET['id']);

    include ("views/delete.php");

 ?>