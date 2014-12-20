<?php
$title="Мои работы";
 require_once "header.php";
?>
        <div class="container">
       <aside>
           <nav class="navbar">
              <ul>
                  <li><a href="index.php">Обо мне</a></li>
                  <li class="myjob-active"><a href="job.php">Мои работы</a></li>
                  <li><a href="feedback.php">Связаться со мной</a></li>
              </ul>
           </nav>
           <?php
require_once "contact.php";
?>
       </aside>
       <div class="content-minor">
       <div class="content-myjobs">
       <h2>Мои работы</h2>
       </div>
           <div class="projects">
            <div class="site">
               <img src="img/image1.png" alt="site1">
                <div class="site-hover">
                    <a class="site-link" href="http://artemchuykin.com">artemchuykin.com</a>
                </div>
                 </div>
                 <p><a class="projects-link" href="http://artemchuykin.com">www.artemchuykin.com</a><br>Мой личный сайт - визитка</p>
            </div>
            <div class="projects">
            <div class="site">
               <img src="img/image2.png" alt="site2">
                <div class="site-hover">
                    <a class="site-link" href="http://artemchuykin.com">loftblog.ru</a>
                </div>
                 </div>
                 <p><a class="projects-link" href="http://artemchuykin.com">www.loftblog.ru</a><br>Мой личный сайт - визитка</p>
            </div>
            <div class="projects">
            <div class="site">
               <img src="img/image3.png" alt="site3">
                <div class="site-hover">
                    <a class="site-link" href="http://artemchuykin.com">rb-flash.ru</a>
                </div>
                 </div>
                 <p><a class="projects-link" href="http://artemchuykin.com">www.rb-flash.ru</a><br>Мой личный сайт - визитка</p>
            </div>
            <div class="projects">
            <div class="site">
               <img src="img/image4.png" alt="site4">
                <div class="site-hover">
                    <a class="site-link" href="http://artemchuykin.com">habra.ru</a>
                </div>
                 </div>
                 <p><a class="projects-link" href="http://artemchuykin.com">www.habra.ru</a><br>Мой личный сайт - визитка</p>
            </div>
            <div class="projects">
            <div class="add-site">
               <a id="popup" href="#"><img src="img/addproject.png" alt="addsiteimg">Добавить проект</a>
                 </div>
            </div>
       </div>
       </div>
<?php
require_once "modal.php";
?>
<?php
require_once "footer.php";
?>  