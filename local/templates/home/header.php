<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
    <title>HomeSpace &mdash; Colorlib Website Template</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.theme.default.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/aos.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css");
    ?>

<?$APPLICATION->ShowHead();?>
</head>

<body>
<?=$APPLICATION->ShowPanel();?>
<div class="site-loader"></div>

<?
global $myarrfilter;
$myarrfilter = array(
    array('PROPERTY_PREFERRED_DEAL_VALUE' => 'yes')
); ?>


<div class="site-wrap">





    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "header_phone", Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                            "PATH" => "/include/header_phone.php",	// Путь к файлу области
                            "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                        ),
                            false
                        );?>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "header_email", Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                            "PATH" => "/include/header_email.php",	// Путь к файлу области
                            "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                        ),
                            false
                        );?>
                    </p>
                </div>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "header_links", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                    "PATH" => "/include/header_links.php",	// Путь к файлу области
                    "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                ),
                    false
                );?>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "header_logo", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                    "PATH" => "/include/header_logo.php",	// Путь к файлу области
                    "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                ),
                    false
                );?>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "mcart_menu_header", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "3",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                    "MENU_THEME" => "site"
                ),
                    false
                );?>
<!--                <div class="col-4 col-md-4 col-lg-8">-->
<!--                    <nav class="site-navigation text-right text-md-right" role="navigation">-->
<!---->
<!--                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"-->
<!--                                                                                      class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>-->
<!---->
<!--                        <ul class="site-menu js-clone-nav d-none d-lg-block">-->
<!--                            <li class="active">-->
<!--                                <a href="index.html">Home</a>-->
<!--                            </li>-->
<!--                            <li class="has-children">-->
<!--                                <a href="properties.html">Properties</a>-->
<!--                                <ul class="dropdown">-->
<!--                                    <li><a href="#">Buy</a></li>-->
<!--                                    <li><a href="#">Rent</a></li>-->
<!--                                    <li><a href="#">Lease</a></li>-->
<!--                                    <li class="has-children">-->
<!--                                        <a href="#">Menu</a>-->
<!--                                        <ul class="dropdown">-->
<!--                                            <li><a href="#">Menu One</a></li>-->
<!--                                            <li><a href="#">Menu Two</a></li>-->
<!--                                            <li><a href="#">Menu Three</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><a href="blog.html">Blog</a></li>-->
<!--                            <li><a href="about.html">About</a></li>-->
<!--                            <li><a href="contact.html">Contact</a></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</div>


