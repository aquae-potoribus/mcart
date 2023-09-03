<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("HOMESPACE");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"my_filtered_news",
	array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"AJAX_OPTION_HISTORY" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"CACHE_TIME" => "36000000",
	"CACHE_TYPE" => "Y",
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "/ads/#ELEMENT_CODE#/",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"DISPLAY_DATE" => "Y",
	"DISPLAY_NAME" => "Y",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "Y",
	"DISPLAY_TOP_PAGER" => "N",
	"FIELD_CODE" => array(
	0 => "NAME",
	1 => "DETAIL_PICTURE",
	2 => "",
	),
	"FILTER_NAME" => "myarrfilter",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"IBLOCK_ID" => "5",
	"IBLOCK_TYPE" => "ads",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
	"INCLUDE_SUBSECTIONS" => "Y",
	"MESSAGE_404" => "",
	"NEWS_COUNT" => "5",
	"PAGER_BASE_LINK_ENABLE" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => ".default",
	"PAGER_TITLE" => "Новости",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"PREVIEW_TRUNCATE_LEN" => "",
	"PROPERTY_CODE" => array(
	0 => "LOCATION",
	1 => "LINKS_EXTERNAL_MATERIALS",
	2 => "PRICE",
	3 => "",
	),
	"SET_BROWSER_TITLE" => "Y",
	"SET_LAST_MODIFIED" => "N",
	"SET_META_DESCRIPTION" => "Y",
	"SET_META_KEYWORDS" => "Y",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "Y",
	"SHOW_404" => "N",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_BY2" => "SORT",
	"SORT_ORDER1" => "DESC",
	"SORT_ORDER2" => "ASC",
	"STRICT_SECTION_CHECK" => "N",
	"COMPONENT_TEMPLATE" => "my_filtered_news"
	),
	false
	);?>


<div class="py-5">
	<div class="container">
		<div class="row">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "main_pros", Array(
				"COMPONENT_TEMPLATE" => ".default",
				"AREA_FILE_SHOW" => "file",	// Показывать включаемую область
				"PATH" => "/include/pros1.php",	// Путь к файлу области
				"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
			),
				false
			);?>

			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"main_pros",
				array(
					"COMPONENT_TEMPLATE" => "main_pros",
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/pros2.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"main_pros",
				array(
					"COMPONENT_TEMPLATE" => "main_pros",
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/pros3.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>
		</div>
	</div>
</div>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"news_lenta",
	array(
		"COMPONENT_TEMPLATE" => "news_lenta",
		"IBLOCK_TYPE" => "ads",
		"IBLOCKS" => array(
			0 => "5",
		),
		"NEWS_COUNT" => "9",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "PROPERTY_PRICE",
			3 => "PROPERTY_NUMB_FLOORS",
			4 => "PROPERTY_SQUARE",
			5 => "PROPERTY_NUMB_BATHROOMS",
			6 => "PROPERTY_GARAGE",
			7 => "PROPERTY_LOCATION",
			8 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "/ads/#ELEMENT_CODE#/",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"services_templ",
	array(
		"COMPONENT_TEMPLATE" => "services_templ",
		"IBLOCK_TYPE" => "srvs",
		"IBLOCKS" => array(
			0 => "8",
		),
		"NEWS_COUNT" => "6",
		"FIELD_CODE" => array(
			0 => "XML_ID",
			1 => "NAME",
			2 => "PROPERTY_LOGO",
			3 => "PROPERTY_EXTERNAL_LINK",
			4 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "#SITE_DIR#/services/#ELEMENT_CODE#/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"news_templ",
	array(
		"COMPONENT_TEMPLATE" => "news_templ",
		"IBLOCK_TYPE" => "news",
		"IBLOCKS" => array(
			0 => "1",
		),
		"NEWS_COUNT" => "3",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "300",
		"CACHE_GROUPS" => "Y",
		"ACTIVE_DATE_FORMAT" => "M j".GetMessage("NUMERAL").", Y"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>