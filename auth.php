<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_templ", 
	array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "/profile/",
		"REGISTER_URL" => "/login/?register=yes",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_templ"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>