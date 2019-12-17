<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { // если в сайдбаре есть что выводить ?>

    <div onmouseover="hoverSidebar()" class="call-sidebar"></div>

    <!--sticky sidebar-->
<div class="sidebar-small main-sidebar sticky-top" id="sidebar-small" onmouseover="hoverSidebar()" onmouseout="hideSidebar()">
    <span class="sidebar-close" onclick="closeNav()">&times;</span>
    <span class="sidebar-close-small" onclick="closeFullNav()">&times;</span>
    <a href="tel:+380936335432">
        <div class="small-phone">Позвонить</div>
    </a>
    <div class="player">
        <p class="player-text" id="player-text" onclick="play()">Вкл. плеер</p>
        <audio id="audio" src="<?php echo get_template_directory_uri();?>/img/music.mp3" preload="auto" loop="loop"></audio>
    </div>
    <div class="main-navigation">
        <nav  id="navbar-main">
            <ul id="myMenu">
                <li data-menuanchor="firstPage" class="active"><a href="#firstPage" onclick="closeFullNav()">Главная</a></li>
                <li data-menuanchor="secondPage"><a href="#secondPage" onclick="closeFullNav()">О нас</a></li>
                <li data-menuanchor="3rdPage"><a href="#3rdPage" onclick="closeFullNav()">Услуги</a></li>
                <li data-menuanchor="4thPage"><a href="#4thPage" onclick="closeFullNav()">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div class="socials">
        <a href="https://www.facebook.com/FleetStreet.186" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="second" href="https://instagram.com/fleetstreet.186" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div class="order" data-toggle="modal" data-target="#modal-2">
        <div class="order-call">
            <p>Заказать </br> обратный </br> звонок</p>
        </div>
        <div class="order-image"></div>
    </div>
    <div class="phone-numbers">
        <a class="tel" href="tel:+380988984133">+380 98 898–41–33</a>
        </br>
        <a class="tel" href="tel:+380936335432">+380 93 633–54–32</a>
    </div>
    <div class="made-by">
        <p>Created by<a href="http://greatpro.com.ua/"> GreatPro</a></p>
        <p>© Fleet Street.186 2016. </p>
    </div>
</div>
    <div class="sidebar-small mobile-sidebar sticky-top" id="sidebar-small1">
        <span class="sidebar-close-small" onclick="closeFullNav()">&times;</span>
        <a href="tel:+380936335432">
            <div class="small-phone">Позвонить</div>
        </a>
        <div class="main-navigation">
            <nav  id="navbar-main">
                <ul id="myMenu">
                    <li data-menuanchor="firstPage" class="active"><a href="#firstPage1" onclick="closeFullNav(this)">Главная</a></li>
                    <li data-menuanchor="secondPage"><a href="#secondPage1" onclick="closeFullNav(this)">О нас</a></li>
                    <li data-menuanchor="3rdPage"><a href="#3rdPage1" onclick="closeFullNav(this)">Услуги</a></li>
                    <li data-menuanchor="4thPage"><a href="#4thPage1" onclick="closeFullNav(this)">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div class="socials">
            <a href="https://www.facebook.com/FleetStreet.186" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="second" href="https://instagram.com/fleetstreet.186" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="order" data-toggle="modal" data-target="#modal-2">
            <div class="order-call">
                <p>Заказать </br> обратный </br> звонок</p>
            </div>
            <div class="order-image"></div>
        </div>
        <div class="phone-numbers">
            <a class="tel" href="tel:+380988984133">+380 98 898–41–33</a>
            </br>
            <a class="tel" href="tel:+380936335432">+380 93 633–54–32</a>
        </div>
        <div class="made-by">
            <p>Created by<a href="http://greatpro.com.ua/"> GreatPro</a></p>
            <p>© Fleet Street.186 2016. </p>
        </div>
    </div>

<?php } ?>
