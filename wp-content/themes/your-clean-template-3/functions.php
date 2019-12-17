<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

add_theme_support('title-tag'); // теперь тайтл управляется самим вп

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(500, 500); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 500, 500, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

if (!class_exists('clean_comments_constructor')) { // если класс уже есть в дочерней теме - нам не надо его определять
	class clean_comments_constructor extends Walker_Comment { // класс, который собирает всю структуру комментов
		public function start_lvl( &$output, $depth = 0, $args = array()) { // что выводим перед дочерними комментариями
			$output .= '<ul class="children">' . "\n";
		}
		public function end_lvl( &$output, $depth = 0, $args = array()) { // что выводим после дочерних комментариев
			$output .= "</ul><!-- .children -->\n";
		}
	    protected function comment( $comment, $depth, $args ) { // разметка каждого комментария, без закрывающего </li>!
	    	$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : ''); // берем стандартные классы комментария и если коммент пренадлежит автору поста добавляем класс author-comment
	        echo '<li id="comment-'.get_comment_ID().'" class="'.$classes.' media">'."\n"; // родительский тэг комментария с классами выше и уникальным якорным id
	    	echo '<div class="media-left">'.get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object'))."</div>\n"; // покажем аватар с размером 64х64
	    	echo '<div class="media-body">';
	    	echo '<span class="meta media-heading">Автор: '.get_comment_author()."\n"; // имя автора коммента
	    	//echo ' '.get_comment_author_email(); // email автора коммента, плохой тон выводить почту
	    	echo ' '.get_comment_author_url(); // url автора коммента
	    	echo ' Добавлено '.get_comment_date('F j, Y в H:i')."\n"; // дата и время комментирования
	    	if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>'."\n"; // если комментарий должен пройти проверку
	    	echo "</span>";
	        comment_text()."\n"; // текст коммента
	        $reply_link_args = array( // опции ссылки "ответить"
	        	'depth' => $depth, // текущая вложенность
	        	'reply_text' => 'Ответить', // текст
				'login_text' => 'Вы должны быть залогинены' // текст если юзер должен залогинеться
	        );
	        echo get_comment_reply_link(array_merge($args, $reply_link_args)); // выводим ссылку ответить
	        echo '</div>'."\n"; // закрываем див
	    }
	    public function end_el( &$output, $comment, $depth = 0, $args = array() ) { // конец каждого коммента
			$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if (!function_exists('pagination')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function pagination() { // функция вывода пагинации
		global $wp_query; // текущая выборка должна быть глобальной
		$big = 999999999; // число для замены
		$links = paginate_links(array( // вывод пагинации с опциями ниже
			'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
			'format' => '?paged=%#%', // формат, %#% будет заменено
			'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
			'type' => 'array', // нам надо получить массив
			'prev_text'    => 'Назад', // текст назад
	    	'next_text'    => 'Вперед', // текст вперед
			'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
			'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
			'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
			'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
			'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
			'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
			'before_page_number' => '', // строка перед цифрой
			'after_page_number' => '' // строка после цифры
		));
	 	if( is_array( $links ) ) { // если пагинация есть
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
		        else echo "<li>$link</li>"; 
		    }
		   	echo '</ul>';
		 }
	}
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_scripts() { // добавление скриптов
	    if(is_admin()) return false; // если мы в админке - ничего не делаем
		
		wp_enqueue_script('fonts', 'https://use.fontawesome.com/1cf11eb127.js','','',true); // 
		//wp_deregister_script('jquery'); // выключаем стандартный jquery
//	    wp_enqueue_script('j_query', get_template_directory_uri().'/js/jquery-3.1.js','','',true); // добавляем свой
		//wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
	    wp_enqueue_script('j_query', 'http://code.jquery.com/jquery-1.9.1.js','','',true); // добавляем свой
	    wp_enqueue_script('j_query', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js','','',true); // добавляем свой

		wp_enqueue_script('pogressbar', 'https://cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.5.6/dist/progressbar.js','','',true); // и скрипты шаблона
		
        wp_enqueue_script('pixi', get_template_directory_uri().'/js/pixi.js','','',true); // и скрипты шаблона
        wp_enqueue_script('Nodes', get_template_directory_uri().'/js/Nodes.js','','',true); // и скрипты шаблона
		//wp_enqueue_script('scrolloverflow', get_template_directory_uri().'/js/scrolloverflow.js','','',true); // и скрипты шаблона
		//wp_enqueue_script('full_page', get_template_directory_uri().'/js/jquery.fullPage.js','','',true); // и скрипты шаблона    
        wp_enqueue_script('page-piling', get_template_directory_uri().'/js/jquery.pagepiling.js','','',true);		
//        wp_enqueue_script('google-map', get_template_directory_uri().'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false','','',true);
		wp_enqueue_script('moment-with-locales', get_template_directory_uri().'/js/moment-with-locales.min.js','','',true); // и скрипты шаблона
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js','','',true); // бутстрап
		wp_enqueue_script('bootstrap-datetimepicker', get_template_directory_uri().'/js/bootstrap-datetimepicker.min.js','','',true); // и скрипты шаблона
		wp_enqueue_script('full_page', get_template_directory_uri().'/js/jquery.chained.js?v=1.0.0','','',true); // и скрипты шаблона
		wp_enqueue_script('contact', get_template_directory_uri().'/js/contact.js','','',true); // и скрипты шаблона
		wp_enqueue_script('storybox', get_template_directory_uri().'/js/story-box.min.js','','',true); // и скрипты шаблона
		wp_enqueue_script('c_common', get_template_directory_uri().'/js/common.js','','',true); // и скрипты шаблона
		wp_enqueue_script('gmaos', get_template_directory_uri().'/js/gmaps.js','','',true); // и скрипты шаблона
	}
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_styles() { // добавление стилей
	    if(is_admin()) return false; // если мы в админке - ничего не делаем
	    wp_enqueue_style( 'bs', get_template_directory_uri().'/bootstrap/css/bootstrap.css' ); // бутстрап
		//wp_enqueue_style( 'fullpage', get_template_directory_uri().'/css/jquery.fullPage.css' ); // основные стили шаблона
		wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css' ); // основные стили шаблона!!!
        wp_enqueue_style( 'pagepiling', get_template_directory_uri().'/css/jquery.pagepiling.css' );
		wp_enqueue_style( 'storybox', get_template_directory_uri().'/css/story-box-zen.css' );
		wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' ); // основные стили шаблона
		wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' ); // основные стили шаблона
		wp_enqueue_style( 'style', get_template_directory_uri().'/css/bootstrap-datetimepicker.css' ); // основные стили шаблона
		wp_enqueue_style( 'm_media', get_template_directory_uri().'/css/media.css' ); // основные стили шаблона
	}
}
function js_variables(){
    $variables = array (
        'ajax_url' => admin_url('admin-ajax.php'),
        'is_mobile' => wp_is_mobile()
        // Тут обычно какие-то другие переменные
    );
    echo(
    '<script type="text/javascript">window.wp_data = '.
        json_encode($variables).'</script>'
    );
}
add_action('wp_footer','js_variables');

add_action( 'wp_ajax_do_something',        'get_posts_callback' ); // For logged in users
add_action( 'wp_ajax_nopriv_do_something', 'get_posts_callback' ); // For anonymous users
add_action( 'wp_ajax_do_something_back',        'get_back' ); // For logged in users
add_action( 'wp_ajax_nopriv_do_something_back', 'get_back' ); // For anonymous users
function get_back()
{
	echo '
	<div class="container-fluid">
                <div class="row">
                    <span class="sidebar-button" onclick="openNav()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                         <span class="sidebar-button-small" onclick="openFullNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                        <a href="tel:+380936335432">
                            <div class="small-phone">Позвонить</div>
                        </a>
                        <div class="row">
                            <div class="services-header">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left">
                                    <div class="all-line"></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
                                    <div class="services-title">
                                        <h1 class="title">Услуги</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                <div class="services-content">
									<div class="container-circle">
										<div class="progress" ></div>
										<div class="progress" id="progress_right"></div>
										<div class="progress" id="progress_left"></div>
									</div>
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-tiny-12">
                                        <h2>Мужчинам</h2>
                                    </div>
                                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-4 col-md-4 col-sm-4 col-xs-6 woman">
                                        <h2>Женщинам</h2>
                                    </div>

                                    <!-- мужчины -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tiny-12 mm_left">
                                        <ul class="main-page-ul men">
											<li id="132" data-circle="0.015"><a class="load" data-container-id="content" data-template="home" data-id-post="132" href="/strizhka-muzhskaya/">Стрижка</a></li>
                                            <li id="138" data-circle="0.055"><a class="load" data-container-id="content" data-template="home" data-id-post="138" href="/oformlenie-borody/">Оформление бороды</a></li>
                                            <li id="140" data-circle="0.09"><a class="load" data-container-id="content" data-template="home" data-id-post="140" href="/dopolnitelnye-uslugi-muzhchinam/">Дополнительные услуги</a></li>
                                            <li id="142" data-circle="0.122"><a class="load" data-container-id="content" data-template="home" data-id-post="142" href="/uhod-za-rukami-i-nogami/">Уход за руками и ногами</a></li>
                                        </ul>
                                    </div>

                                    <!-- женщины -->
                                    <div class="col-lg-offset-6 col-md-offset-5 col-sm-offset-6 col-xs-offset-4 col-lg-3 col-md-4 col-sm-3 col-xs-4 col-tiny-12 mm_right" >

                                        <h2 class="woman-small">Женщинам</h2>
                                        <ul class="main-page-ul women">
                                                <li id="145" data-circle="0.02"><a class="load" data-container-id="content" data-template="home" href="/strizhka-zhenskaya/">Стрижка</a></li>
                                                <li id="147" data-circle="0.075"><a class="load" data-container-id="content" data-template="home" href="/pokraska/">Окрашивание волос</a></li>
                                                <li id="149" data-circle="0.12"><a class="load" data-container-id="content" data-template="home" href="/ukladka-volos/">Укладка волос</a></li>
                                                <li id="152" data-circle="0.167"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-volosami/">Уход за волосами</a></li>
                                                <li id="154" data-circle="0.205"><a class="load" data-container-id="content" data-template="home" href="/dopolnitelnye-uslugi-zhenshhinam/">Дополнительные услуги</a></li>
                                                <li id="156" data-circle="0.25"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-rukami-i-nogami-zhenshhinam/">Уход за руками и ногами</a></li>
                                                <li id="158" data-circle="0.30"><a class="load" data-container-id="content" data-template="home" href="/uslugi-brovista/" <>Окрашивание бровей, ресниц</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	';
}
function get_posts_callback(){
    $post = get_post($_GET['id_post']);
    $title = $post->post_title;
    $content = wpautop($post->post_content) ;
    $thumbnail = get_the_post_thumbnail( $_GET['id_post'], big-thumb);
    $price=get_field('price',$_GET['id_post']);
echo '<div class="container-fluid">
            <div class="row">
                <span class="sidebar-button" onclick="openNav()">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <span class="sidebar-button-small" onclick="openFullNav()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    <div class="row">
                        <div class="services-header-inner">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-7 no-gutter-left">
                                <div class="all-line"></div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
                                <div class="services-title">
                                    <h1 class="title">Услуги</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 left-sidebar">
                            <div class="men-menu">
                                <p>Мужчинам</p>
<ul class="men">
	<li id="132" data-circle="0.015"><a class="load" data-container-id="content" data-template="home" data-id-post="132" href="/strizhka-muzhskaya/">Стрижка</a></li>
	<li id="138" data-circle="0.055"><a class="load" data-container-id="content" data-template="home" data-id-post="138" href="/oformlenie-borody/">Оформление бороды</a></li>
	<li id="140" data-circle="0.09"><a class="load" data-container-id="content" data-template="home" data-id-post="140" href="/dopolnitelnye-uslugi-muzhchinam/">Дополнительные услуги</a></li>
	<li id="142" data-circle="0.122"><a class="load" data-container-id="content" data-template="home" data-id-post="142" href="/uhod-za-rukami-i-nogami/">Уход за руками и ногами</a></li>  
</ul>
</div>
<div class="women-menu">
	<p>Женщинам</p>
	<ul class="women">
		<li id="145" data-circle="0.02"><a class="load" data-container-id="content" data-template="home" href="/strizhka-zhenskaya/">Стрижка</a></li>
		<li id="147" data-circle="0.075"><a class="load" data-container-id="content" data-template="home" href="/pokraska/" >Окрашивание волос</a></li>
		<li id="149" data-circle="0.12"><a class="load" data-container-id="content" data-template="home" href="/ukladka-volos/">Укладка волос</a></li>
		<li id="152" data-circle="0.167"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-volosami/">Уход за волосами</a></li>
		<li id="154" data-circle="0.205"><a class="load" data-container-id="content" data-template="home" href="/dopolnitelnye-uslugi-zhenshhinam/">Дополнительные услуги</a></li>
		<li id="156" data-circle="0.25"><a class="load" data-container-id="content" data-template="home" href="/uhod-za-rukami-i-nogami-zhenshhinam/">Уход за руками и ногами</a></li>
		<li id="158" data-circle="0.30"><a class="load" data-container-id="content" data-template="home" href="/uslugi-brovista/">Окрашивание бровей, ресниц</a></li>
    </ul>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 price-inner-content">
	<div class="top-content">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="services-hide">
				<div class="nav-button">
					<div class="previous"><a href="http://fleetstreet186.com.ua/#3rdPage"><span aria-hidden="true">&larr;</span>Назад</a></div>
				</div>
			</div>
			<h3>'.$title.'</h3>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-5 col-tiny-12">
            '.$content.'
		</div>
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-7 col-tiny-12">
			<div class="fleet-button main-shape" data-toggle="modal" data-target="#modal-1">
				<span>Записаться</span>
				<div class="edge top"></div>
				<div class="edge left"></div>
				<div class="corner top left"></div>
				<div class="corner top right"></div>
				<div class="corner bottom left"></div>
				<div class="corner bottom right"></div>
			</div>
		</div>
	</div>
	<div class="main-content">
		<div class="col-xs-offset-2 col-xs-8 price-block-small">
            '.$price.'
		</div>
		<div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-7 col-md-7 col-sm-7 col-xs-10 col-tiny-12">
			<div class="slider-wrapper">
				<div class="main-shape" id="photo-inner">
                    '.$thumbnail.'
					<div class="edge top"></div>
					<div class="edge left"></div>
					<div class="corner top left"></div>
					<div class="corner top right"></div>
					<div class="corner bottom left"></div>
					<div class="corner bottom right"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 price-block">
            '.$price.'
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>';

}

if (!class_exists('bootstrap_menu')) {
	class bootstrap_menu extends Walker_Nav_Menu { // внутри вывод 
		private $open_submenu_on_hover; // параметр который будет определять раскрывать субменю при наведении или оставить по клику как в стандартном бутстрапе

		function __construct($open_submenu_on_hover = true) { // в конструкторе
	        $this->open_submenu_on_hover = $open_submenu_on_hover; // запишем параметр раскрывания субменю
	    }

		function start_lvl(&$output, $depth = 0, $args = array()) { // старт вывода подменюшек
			$output .= "\n<ul class=\"dropdown-menu\">\n"; // ул с классом
		}
		function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { // старт вывода элементов
			$item_html = ''; // то что будет добавлять
			parent::start_el($item_html, $item, $depth, $args); // вызываем стандартный метод родителя
			if ( $item->is_dropdown && $depth === 0 ) { // если элемент содержит подменю и это элемент первого уровня
			   if (!$this->open_submenu_on_hover) $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"', $item_html); // если подменю не будет раскрывать при наведении надо добавить стандартные атрибуты бутстрапа для раскрытия по клику
			   $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html); // ну это стрелочка вниз
			}
			$output .= $item_html; // приклеиваем теперь
		}
		function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { // вывод элемента
			if ( $element->current ) $element->classes[] = 'active'; // если элемент активный надо добавить бутстрап класс для подсветки
			$element->is_dropdown = !empty( $children_elements[$element->ID] ); // если у элемента подменю
			if ( $element->is_dropdown ) { // если да
			    if ( $depth === 0 ) { // если li содержит субменю 1 уровня
			        $element->classes[] = 'dropdown'; // то добавим этот класс
			        if ($this->open_submenu_on_hover) $element->classes[] = 'show-on-hover'; // если нужно показывать субменю по хуверу
			    } elseif ( $depth === 1 ) { // если li содержит субменю 2 уровня
			        $element->classes[] = 'dropdown-submenu'; // то добавим этот класс, стандартный бутстрап не поддерживает подменю больше 2 уровня по этому эту ситуацию надо будет разрешать отдельно
			    }
			}
			parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output); // вызываем стандартный метод родителя
		}
	}
}

if (!function_exists('content_class_by_sidebar')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
		if (is_active_sidebar( 'sidebar' )) { // если есть
			echo 'col-sm-9'; // пишем класс на 80% ширины
		} else { // если нет
			echo 'col-sm-12'; // контент на всю ширину
		}
	}
}

?>
