<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
	 <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback_templ", Array(
	"EMAIL_TO" => "sergeikondrashkins@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "EMAIL",
			1 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>