<?php 
   

    require_once("models/database.php");
    require_once("models/contacts.php");

    $link = db_connect();
  
    $contacts = contacts_all($link);
   

    include ("views/main.php");

 ?>