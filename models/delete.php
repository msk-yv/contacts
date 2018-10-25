<?php

    require_once("database.php");
    require_once("contacts.php");

    $link = db_connect();

    $contacts = contact_delete($link, $_POST['id']);

    //echo 'Look`s like all good';
    header('Location: /');

?>