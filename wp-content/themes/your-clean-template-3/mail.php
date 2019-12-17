<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$select = $_POST['select1'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$name = $_POST["name"];
	$tel = $_POST['tel'];
	$call = $_POST['call'];
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя ';}
	if(!$tel) {$error .= 'Укажите ваш телефон ';}
	/*if(!$sub) {$error .= 'Укажите тему обращения. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}*/
	if(!$error) {	
		$address = "fleetstreet.186@gmail.com";
		if($call) {
			$mes = "Имя: ".$name."\nТема: Заказ обратного звонка - ".$tel."\n\n";
			$send = mail ($address,'Обратный звонок',$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:fleetstreet186");
			}
		else {
		    $mes = "Имя: ".$name."\nТема: Предварительное бронирование - ".$select."\n\nДата: ".$date." ".$time."\nТелефон: ".$tel."\n\n";
			$send = mail ($address,'Предварительное бронирование',$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:fleetstreet186");
		     }
		
		if(!$send) {echo 'OK';}
		//echo 'OK';
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>