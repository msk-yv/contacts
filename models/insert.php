<?php

    require_once("database.php");
    require_once("contacts.php");

    $link = db_connect();

    $contacts = contact_input($link, $_POST['name'], $_POST['phone'], $_POST['email']);

    echo 'Look`s like all good';
    header('Location: /');

?>