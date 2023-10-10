<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<html lang="<?=LANGUAGE_ID?>>">

<head>
    <title><?=$APPLICATION->ShowTitle();?></title>
    <?=$APPLICATION->ShowHead();?>
   <?
   $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.min.js");// для скриптов
   $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");// для скриптов
   $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/scripts.js");// для скриптов


   $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/reset.css"); // для стилей
   $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css"); // для стилей
   $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.css"); // для стилей
   ?>
    
    <link rel="icon" type="image/vnd.microsoft.icon"  href=<?=SITE_TEMPLATE_PATH?>."./img/favicon.ico">
    <link rel="shortcut icon" href=<?=SITE_TEMPLATE_PATH?>."./img/favicon.ico">
</head>

<body>
<?=$APPLICATION->ShowPanel();?>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                <? $hours = getdate()["hours"];
                 if ($hours >= 9 && $hours < 18) {?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <?} else {?>
                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <?}?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"demoExam", 
	array(
		"FORGOT_PASSWORD_URL" => "/s2/login/?forgot_password=yes",
		"PROFILE_URL" => "/s2/login/user.php",
		"REGISTER_URL" => "/s2/login/?register=yes",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "demoExam"
	),
	false
);?>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPONENT_TEMPLATE" => "top",
                "DELAY" => "N",
                "MAX_LEVEL" => "3",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "Y"
            )
        );?>
        <!-- /nav -->
        <? if ($APPLICATION->GetCurPage() <> SITE_DIR."/") {?>
            <!-- /nav -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "template1",
                Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "1"
                )
            );?>

        <?}?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">

                        <? if ($APPLICATION->GetCurPage() <> SITE_DIR."/") {?>
                            <header>
                                <h1><?=$APPLICATION->ShowTitle();?></h1>
                            </header>
                        <?}?>