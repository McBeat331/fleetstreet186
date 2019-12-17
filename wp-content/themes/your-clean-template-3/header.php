<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="SHORTCUT ICON" type="image/x-icon" href="<?php echo get_home_url();?>/favicon.ico">

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<!--    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body onload="loadMarker()" id="content">
	
<!--modals-->
<div class="modal fade" id="modal-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div id="note"></div>

            <form id="enroll" action="<?php echo get_template_directory_uri();?>/mail.php" method="post">
                <div class="modal-body">

                    <button class="close" type="button" data-dismiss="modal">
                        <i class="fa fa-close"></i>
                    </button>

                    <h5>Предварительное бронирование</h5>
                    <?php //echo do_shortcode( '[contact-form-7 id="187" title="Бронировать"]' ); ?>
                    <div class="select_main">
                        <p></p>
                        <select name="select1" id="select1">
                            <option value="Стрижка мужская" id="132">Стрижка мужская</option>
                            <option value="Оформление бороды" id="138">Оформление бороды</option>
                            <option value="Дополнительные услуги для мужчин" id="140">Дополнительные услуги для мужчин</option>
                            <option value="Уход за руками и ногами для мужчин" id="142">Уход за руками и ногами для мужчин</option>
                            <option value="Стрижка женская" id="145">Стрижка женская</option>
                            <option value="Окрашивание волос" id="147">Окрашивание волос</option>
                            <option value="Укладка волос" id="149">Укладка волос</option>
                            <option value="Уход за волосами" id="152">Уход за волосами</option>
                            <option value="Дополнительные услуги для женщин" id="154">Дополнительные услуги для женщин</option>
                            <option value="Уход за руками и ногами для женщин" id="156">Уход за руками для женщин</option>
                            <option value="Окрашивание бровей, ресниц" id="158">Окрашивание бровей, ресниц</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group date" id="datetimepicker1">
                            <input required title="01.01.2016" name="date" class="form-control" pattern="[0-9]{2}\.[0-9]{2}\.[0-9]{4}" placeholder="01.01.2016"/>
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group date" id="datetimepicker2">
                            <input required title="00:00" name="time" class="form-control" pattern="[0-23]{2}\:[0-59]{2}" placeholder="00:00"/>
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input required type="text" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input required title="+380000000000" type="tel" name="tel" pattern="(\+?\d[- .]*){12,13}" maxlength="13" class="form-control" placeholder="+380" value="+380">
                    </div>
                    <button type="submit" style="background-color: inherit; border: none; width: 100%;">
                        <div class="fleet-button main-shape">
                            <span>Бронировать</span>
                            <div class="edge top"></div>
                            <div class="edge left"></div>
                            <div class="corner top left"></div>
                            <div class="corner top right"></div>
                            <div class="corner bottom left"></div>
                            <div class="corner bottom right"></div>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-2">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <form id="call" action="<?php echo get_template_directory_uri();?>/mail.php" method="post">
            <div class="modal-body">
                <button class="close" type="button" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                </button>
                <h5>Заказать обратный звонок</h5>
                <input type="hidden" name="call" value="1">
                <div class="form-group">
                    <input required type="text" name="name" class="form-control" placeholder="Имя">
                </div>
                <div class="form-group">
                    <input required title="+380000000000" type="tel" name="tel" pattern="(\+?\d[- .]*){12,13}" maxlength="13" class="form-control" placeholder="+380" value="+380">
                </div>
                <button type="submit" style="background-color: inherit; border: none; width: 100%;">
                   <div class="fleet-button main-shape">
                        <span>Заказать</span>
                        <div class="edge top"></div>
                        <div class="edge left"></div>
                        <div class="corner top left"></div>
                        <div class="corner top right"></div>
                        <div class="corner bottom left"></div>
                        <div class="corner bottom right"></div>
                    </div>
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-3">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="border: none;">
        <img src="<?php echo get_template_directory_uri();?>/img/form.jpg"/>
        </div>
    </div>
</div>
