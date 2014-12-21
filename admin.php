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
                  <div class="admin-login">
                   <label for="admin-login">Логин</label>
                   <input type="text" name="admin-pass" placeholder="Введите пароль"></inupt>
                   </div>
                   <div class="admin-login">
                   <label for="admin-login">Пароль</label>
                   <input type="text" name="admin-login" placeholder="Введите логин"></inupt>
                   </div>
                   <div class="admin-button">
                       <button class="admin-button-add">Войти</button>
                   </div>
               </form>
            </div>
            </div>
<?php
require_once "footer.php";
?>