<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="wp-content/themes/portfolio//img/logo-image.ico"/>
    <link rel="stylesheet" type="text/css" href="wp-content/themes/portfolio/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="wp-content/themes/portfolio/css/animate.css"/>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="header__content">
          <div class="header__left"><a class="header__logo" href="/"><?php echo SCF::get( 'header__logo' ); ?></a></div>
          <nav class="header__right">
            <input class="navbar__swicher" id="navbar_tog" type="checkbox"/>
            <label class="navbar__toggle" for="navbar_tog"></label>
            <label class="navbar__toggle navbar__toggle_scroll" for="navbar_tog"></label>
            <ul class="navbar">
              <li class="navbar__item"><a class="navbar__link" href="#firstScreen">Главная</a></li>
              <li class="navbar__item"><a class="navbar__link" href="#secondSection">Об авторе</a></li>
              <li class="navbar__item"><a class="navbar__link" href="#sixthSection">Работы</a></li>
              <li class="navbar__item"><a class="navbar__link" href="#fifthSection">Процесс</a></li>
              <li class="navbar__item"><a class="navbar__link" href="#eightSection">Контакты</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <main class="main__content">
        <!-- begin firstScreen-->
        <section class="firstScreen section" id="firstScreen">
          <div class="container_center">
            <div class="firstScreen__content">
              <div class="firstScreen__left"><img src="<?php echo wp_get_attachment_url(SCF::get( 'firstScreen__img' )) ?>" alt=""/></div>
              <div class="firstScreen__right">
                <h1 class="firstScreen__title"><?php echo SCF::get( 'firstScreen__title' ); ?></h1>
                <div class="firstScreen__description">
                  <p><?php echo SCF::get( 'firstScreen__description' ); ?></p>
                </div><a class="btn" href="#eightSection"><?php echo SCF::get( 'btn' ); ?></a>
              </div>
            </div>
          </div>
          <div class="firstScreen__arrow animate__animated animate__bounce animate__infinite"><i class="icon_arrow-down"> </i></div>
        </section>
        <!-- end firstScreen-->
        <!-- begin secondSection-->
        <section class="secondSection section" id="secondSection">
          <div class="container_center">
            <div class="secondSection__content">
              <div class="clause">
                <h2 class="section__title"><?php echo SCF::get( 'secondSection__title' ); ?></h2>
                <div class="clause__description"><?php echo SCF::get( 'secondSection__description' ); ?></div>
              </div>
            </div>
          </div>
        </section>
        <!-- end secondSection-->
        <!-- begin thirdSection-->
        <section class="thirdSection section" id="thirdSection">
          <div class="container_center">
            <div class="thirdSection__content">
              <?php
                 $thirdSection__item = SCF::get('thirdSection__item');
              
                 foreach ($thirdSection__item as $item) {
                     echo '
                     <div class="thirdSection__item">
                       <div class="thirdSection__image"><i class="icon_'.$item['thirdSection__image'].'"></i></div>
                       <div class="thirdSection__text">
                         <div class="thirdSection__number">'.$item['thirdSection__number'].'</div>
                         <div class="thirdSection__subject">'.$item['thirdSection__subject'].'    </div>
                       </div>
                     </div>
                     ';
                 };
              ?>
            </div>
          </div>
        </section>
        <!-- end thirdSection-->
        <!-- begin fourthSection-->
        <section class="fourthSection section" id="fourthSection">
          <div class="container_center">
            <div class="fourthSection__content">
              <div class="fourthSection__left">
                <div class="fourthSection__skillBox">
                  <h2 class="section__title section__title_left"> </h2>
                  <div class="fourthSection__skillList">
                    <?php
                        $Skills = SCF::get('Skills');
                        foreach ($Skills as $item) {
                            echo '
                                <div class="fourthSection__item">
                                    <div class="fourthSection__skillName">'.$item['fourthSection__skillName'].'</div>
                                    <div class="progress">
                                        <div class="progress__bar" style="width: '.$item['progress__bar'].'%"></div>
                                    </div>
                                </div>
                            ';
                        };
                     
                    
                    ?>
                  </div>
                </div>
              </div>
              <div class="fourthSection__right">
                <div class="fourthSection__image"><img src="<?php echo wp_get_attachment_url(SCF::get( 'fourthSection__image' )) ?>" alt=""/></div>
              </div>
            </div>
          </div>
        </section>
        <!-- end fourthSection-->
        <!-- begin fifthSection-->
        <section class="fifthSection section" id="fifthSection">
          <div class="container_center">
            <div class="fifthSection__content">
              <div class="clause">
                <h2 class="section__title"><?php echo SCF::get( 'fifthSection__title' ); ?></h2>
                <div class="clause__description"><?php echo SCF::get( 'fifthSection__description' ); ?></div>
              </div>
              <div class="video"><div class="video__wrapper js_youtube" id="<?php echo SCF::get( 'video__youtube' ); ?>"> 
<img class="video__prev" src="<?php echo wp_get_attachment_url(SCF::get( 'video__prev' )) ?>" alt=""/>
<img class="video__play" src="<?php echo wp_get_attachment_url(SCF::get( 'video__play' )) ?>" alt="Play"/>
</div>
              </div>
            </div>
          </div>
        </section>
        <!-- end fifthSection-->
        <!-- begin sixthSection-->
        <section class="sixthSection section" id="sixthSection">
          <div class="sixthSection__content">
            <div class="section__title">Мои работы</div>
            <div class="sixthSection__portfolio">
              <?php
                 $sixthSection__content = SCF::get('sixthSection__content');
              
                 foreach ($sixthSection__content as $item) {
              
                     echo '
                         <div class="sixthSection__item"><a class="sixthSection__plate" href="'.$item['sixthSection__plate'].'" style="background-image: url('.wp_get_attachment_url($item['sixthSection__plate_bg']).')">
                 <div class="sixthSection__select"><i class="icon_'.$item['sixthSection__select_icon'].'"></i></div></a></div>
                     ';
                 };
              ?>
            </div>
          </div>
        </section>
        <!-- end sixthSection-->
        <!-- begin eightSection-->
        <section class="eightSection section" id="eightSection">
          <div class="container_center">
            <div class="eightSection__formBox">
              <div class="clause">
                <h2 class="section__title"><?php echo SCF::get( 'eightSection__title' ); ?></h2>
                <div class="clause__description"><?php echo SCF::get( 'eightSection__description' ); ?></div>
              </div>
              <form class="eightSection__grid" action="mail.php" method="POST">
                <div class="eightSection__row">
                  <input type="text" name="name" placeholder="Ваше имя" required="required"/>
                </div>
                <div class="eightSection__row">
                  <input type="text" name="email" placeholder="Ваш e-mail" required="required"/>
                </div>
                <div class="eightSection__row eightSection__row_full">
                  <textarea type="text" name="message" placeholder="Сообщение"></textarea>
                </div>
                <button class="btn btn_form" type="submit">Отправить</button>
              </form>
            </div>
          </div>
        </section>
        <!-- end eightSection-->
        <!-- Begin Modal info-->
        <div class="modal modal-sm fade info" id="info">
          <div class="modal-dialog">
            <div class="modal-content"><a class="modal-close" href="#" data-dismiss="modal"></a>
              <div class="form__message"></div>
            </div>
          </div>
        </div>
        <!-- End modal info-->
      </main>
    </div>
    <footer class="footer">
      <div class="container_center">
        <div class="footer__content">
          <div class="footer__developer">
            <div class="footer__name"><?php echo SCF::get( 'footer__name' ); ?></div>
            <div class="footer__rights">
              <p></p><?php echo SCF::get( 'footer__rights' ); ?>
            </div>
          </div>
          <div class="footer__design"><a href="http://d-e-n.ru/" target="_blank"><?php echo SCF::get( 'footer__design_name' ); ?></a></div>
          <div class="footer__social">
            <?php
               $footer__social = SCF::get('footer__social');
            
               foreach ($footer__social as $item) {
                   echo '
                       <a class="footer__link" href="'.$item['footer__link'].'" target="_blank"><i class="icon_'.$item['footer__icon'].'"></i></a>
                   ';
               };
            ?>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
<script src="wp-content/themes/portfolio/js/jquery.js"></script>
<script src="wp-content/themes/portfolio/js/modal.js"></script>
<script src="wp-content/themes/portfolio/js/script.js"></script>