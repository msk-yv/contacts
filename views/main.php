<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Список контактов</title>
         <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <?php include('views/header.html'); ?>
    <div class="wraperFirstTable">
    <table class="insert_search">
        <tr>
            <th>Внести новый контакт</th>
            <th> Поиск </th>
        </tr> 
        <tr>
            <td><?php include('views/insertForm.php'); ?></td>
            <td><?php include('views/searchForm.php'); ?></td>
        </tr>
    </table>
    </div>
    <div class="wraperSecondTable">
    <table class="results">
        <tr>
            <th>Имя контакта</th>
            <th>Телефон</th>
            <th>мыло</th>
        </tr> 
        <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?=$contact['name']?></td>
            <td><?=$contact['phone']?></td>
            <td><?=$contact['email']?></td>
        </tr>
        <?php endforeach ?>
    </table>
    </div>
    <?php include('views/footer.html'); ?>
</body>
</html>
