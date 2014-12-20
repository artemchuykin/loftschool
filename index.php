<?php
$title="Главная - сайт портфолио";
require_once "header.php";
?>
<div class="container">
       <aside>
           <nav class="navbar">
              <ul>
                  <li class="aboutme-active"><a href="index.php">Обо мне</a></li>
                  <li class="item"><a href="job.php">Мои работы</a></li>
                  <li><a href="feedback.php">Связаться со мной</a></li>
              </ul>
           </nav>
           <?php
require_once "contact.php";
?>
       </aside>
       <div class="content">
           <section class="block clearfix">
               <h2>Основная информация</h2>
                <div class="info">
                  <p><span>Меня зовут:</span>Чуйкин Артем Валентинович</p>
                  <p><span>Мой возраст:</span>24 года</p>
                  <p><span>Мой город:</span>Липецк, Россия</p>
                  <p><span>Моя специализация:</span>FRONTEND разработчик</p>
                  <p><span>Ключевые навыки:</span></p>
                  <div class="skills">
                  <p>html</p>
                  <p>css</p>
                  <p>javascript</p>
                  <p>gulp</p>
                  <p>git</p>
                  </div>
                  </div>
               <div class="photo"></div>
           </section>
           <section class="block">
                <h2>Опыт работы</h2> 
                <div class="block-info">
                    <p class="block-info-text"><img src="img/bag.png" alt="bagimage"></img><span>"М.видео Менеджмент" - Продавец</span><br>Июнь 2010 - Декабрь 2013</p>
                    <p class="block-info-text"><img src="img/bag.png" alt="bagimage"></img><span>"LG Electronics" - Продавец-консультант</span><br>Январь 2014 - Март 2014</p>
                    <p class="block-info-text"><img src="img/bag.png" alt="bagimage"></img><span>"ИП Артем Чуйкин" - Продажи в интернете</span><br>Июнь 2014 - Сентябрь 2014</p>
                    <p class="block-info-text"><img src="img/bag.png" alt="bagimage"></img><span>"Аттитюд" - Веб-разработчик</span><br>Декабрь 2014 - Настоящее время</p>
                </div>
           </section>
           <section class="block">
                <h2>Образование</h2>
                <div class="block-info">
                   <p class="block-info-text"><img src="img/institut.png" alt="institutimg"></img><span>Проф. среднее. НОУ СПО Техникум права и экономики</span><br>Октябрь 2005 - 2008</p>
                    <p class="block-info-text"><img src="img/institut.png" alt="institutimg"></img><span>Высшее. МОУ ВПО Институт Права и Экономики</span><br>Октябрь 2008 - 2012</p>
                    <p class="block-info-text"><img class="courses" src="img/courses.png" alt="coursesimg"></img><span>Курсы Loftschool.ru</span><br>Ноябрь 2014 - по настоящее время</p>
                </div>
           </section>
       </div>
       </div>
      <?php
require_once "footer.php";
?>