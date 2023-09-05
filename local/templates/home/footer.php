    <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<footer class="site-footer">
        <div class="container">
            <div class="row">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "footer_about", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                    "PATH" => "/include/footer_about.php",	// Путь к файлу области
                    "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                ),
                    false
                );?>

                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "footer_menu",
		"MENU_THEME" => "site"
	),
	false
);?>

                

                <?$APPLICATION->IncludeComponent("bitrix:main.include", "footer_links", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                    "PATH" => "/include/footer_links.php",	// Путь к файлу области
                    "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                ),
                    false
                );?>

            </div>
            <?$APPLICATION->IncludeComponent("bitrix:main.include", "footer_copyright", Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",	// Показывать включаемую область
                "PATH" => "/include/footer_copyright.php",	// Путь к файлу области
                "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
            ),
                false
            );?>
        </div>
    </footer>

    </div>

<?
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-migrate-3.0.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-ui.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/popper.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/mediaelement-and-player.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.countdown.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap-datepicker.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/aos.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
?>

    <script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js"></script>

    </body>

</html>