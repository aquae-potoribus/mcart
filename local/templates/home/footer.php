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
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "footer_menu",
		"MENU_THEME" => "site"
	),
	false
);?>


<!--                <div class="col-lg-4 mb-5 mb-lg-0">-->
<!--                    <div class="row mb-5">-->
<!--                        <div class="col-md-12">-->
<!--                            <h3 class="footer-heading mb-4">Navigations</h3>-->
<!--                        </div>-->
<!--                        <div class="col-md-6 col-lg-6">-->
<!--                            <ul class="list-unstyled">-->
<!--                                <li><a href="#">Home</a></li>-->
<!--                                <li><a href="#">Buy</a></li>-->
<!--                                <li><a href="#">Rent</a></li>-->
<!--                                <li><a href="#">Properties</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="col-md-6 col-lg-6">-->
<!--                            <ul class="list-unstyled">-->
<!--                                <li><a href="#">About Us</a></li>-->
<!--                                <li><a href="#">Privacy Policy</a></li>-->
<!--                                <li><a href="#">Contact Us</a></li>-->
<!--                                <li><a href="#">Terms</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

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