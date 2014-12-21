<?php
$title="Связаться со мной";
require_once "header.php";
?>
        <div class="container clearfix">
       <aside>
           <nav class="navbar">
            <ul>
                  <li class="item"><a href="index.php">Обо мне</a></li>
                  <li><a href="job.php">Мои работы</a></li>
                  <li class="contactme-active"><a href="feedback.php">Связаться со мной</a></li>
              </ul>
           </nav>
           <?php
require_once "contact.php";
?>
       </aside>
       <div class="content-minor">
           <div class="writeme">
               <h2>У вас интересный проект? Напиши мне</h2>
           </div>
           <div class="top-form">
               <form class="form" role="form">
                  <div class="form-name-email">
                  <div class="form-name-email-left">
                   <label for="name">Имя</label>
                   <input type="text" name="name" placeholder="Как к Вам обращаться" qtip-content="Вы не ввели имя"></inupt>
                   </div>
                   <div class="form-name-email-right">
                   <label for="email">Email</label>
                   <input type="text" name="email" placeholder="Куда мне писать" qtip-position="right" qtip-content="Вы не ввели e-mail"></inupt>
                   </div>
                   </div>
                   <div class="form-mail">
                   <label for="message">Сообщение</label>
                   <textarea name="message" placeholder="Кратко в чем суть" qtip-content="Что вы от меня хотите?" class="textarea-message"></textarea>
                   </div>
                   <div class="form-captcha">
                       <label for="captcha">Введите код указанный на картинке</label>
                   <img src="app/captcha.php" alt="Код"><input type="text" name="captcha" placeholder="Введите код" class="input-captcha"></inupt>
                   </div>
                   <div class="form-button">
                       <button class="btn-left" type="submit">Отправить</button>
                       <button class="btn-right" type="reset">Очистить</button>
                   </div>
               </form>
           </div>
       </div>
       </div>
       </div>
<?php
require_once "footer.php";
?>  