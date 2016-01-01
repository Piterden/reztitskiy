<?php

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	die('Invalid request');  // client does not have javascript enabled
} 

if (isset($_POST['captcha']) && isset($_SESSION['captcha'])) {
	if ($_POST['captcha'] != ($_SESSION['captcha'][0] + $_SESSION['captcha'][1])) {
		die('Invalid captcha answer');  // client does not have javascript enabled
	}
}

$response = array();
$recepient = 'ya.denfromp@ya.ru';
$sitename = 'reznitskiygallery.com';

$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$text = trim(htmlspecialchars($_POST['text']));

//$response['post'] = $_POST;
$pagetitle = "Новое сообщение с сайта \"$sitename\"";
$message = "Имя: $name \nE-mail: $email \nТекст: $text";
if (mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient")) {
	$response['success'] = true;
	$response['message'] = 'Your message was successfully sent';
} else {
	$response['success'] = false;
	$response['message'] = "Error! Message wasn't.";
};
die(json_encode($response));