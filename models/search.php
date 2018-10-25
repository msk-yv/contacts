<?php

    require_once("database.php");
    require_once("contacts.php");

    $link = db_connect();

    $contacts = contact_search($link, $_GET['string']);

    echo 'Sea';

    //include (".:/views/main.php");

?>
<div class="wraperSecondTable">
    <table class="results">
        <tr>
            <th>Имя контакта</th>
            <th>Телефон</th>
            <th>Электронная почта</th>
            <th></th>
            <th></th>
        </tr> 
        <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?=$contact['name']?></td>
            <td><?=$contact['phone']?></td>
            <td><?=$contact['email']?></td>
            <td><a href="#">редактировать</a></td>
            <td><a href="#">Удалить</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    </div>

<?php 
//phpinfo();
?>