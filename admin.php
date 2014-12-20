<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="js/jquery-2.1.1.min.js"></script>
    <meta name="Artem Chuykin" content="Loftschool">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="admin-container">
<div class="admin-window">
            <div class="admin-header">
                <h3>Авторизируйтесь</h3>
            </div>
                <form method="" action="" class="admin-form">
                  <div class="name-project">
                   <label for="name-project">Название проекта</label>
                   <input type="text" name="nameproject" placeholder="Введите название"></inupt>
                   </div>
                   <div class="url-project">
                   <label for="url-project">URL проекта</label>
                   <input type="text" name="urlproject" placeholder="Добавьте ссылку"></inupt>
                   </div>
                   <div class="admin-button">
                       <button class="admin-button-add">Добавить</button>
                   </div>
               </form>
            </div>
            </div>
<?php
require_once "footer.php";
?>