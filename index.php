<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("HOMESPACE");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"my_filtered_news",
	Array(
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
		"COMPONENT_TEMPLATE" => "my_filtered_news",
		"DETAIL_URL" => "/ads/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"NAME",1=>"DETAIL_PICTURE",2=>"",),
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
		"PROPERTY_CODE" => array(0=>"LOCATION",1=>"LINKS_EXTERNAL_MATERIALS",2=>"PRICE",3=>"",),
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
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<div class="py-5">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"main_pros",
	Array(
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/pros1.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"main_pros",
	Array(
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => "main_pros",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/pros2.php"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"main_pros",
	Array(
		"AREA_FILE_SHOW" => "file",
		"COMPONENT_TEMPLATE" => "main_pros",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/pros3.php"
	)
);?>
		</div>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"news_lenta",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => "news_lenta",
		"DETAIL_URL" => "/ads/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_PICTURE",2=>"PROPERTY_PRICE",3=>"PROPERTY_NUMB_FLOORS",4=>"PROPERTY_SQUARE",5=>"PROPERTY_NUMB_BATHROOMS",6=>"PROPERTY_GARAGE",7=>"PROPERTY_LOCATION",8=>"",),
		"IBLOCKS" => array(0=>"5",),
		"IBLOCK_TYPE" => "ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"services_templ",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services_templ",
		"DETAIL_URL" => "/services/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(
			0 => "XML_ID",
			1 => "NAME",
			2 => "PROPERTY_LOGO",
			3 => "PROPERTY_EXTERNAL_LINK",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "8",
		),
		"IBLOCK_TYPE" => "srvs",
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.line",
	"news_templ",
	Array(
		"ACTIVE_DATE_FORMAT" => "M j".GetMessage("NUMERAL").", Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "N",
		"COMPONENT_TEMPLATE" => "news_templ",
		"DETAIL_URL" => "/news/#ELEMENT_CODE#/",
		"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"DATE_ACTIVE_FROM",4=>"",),
		"IBLOCKS" => array(0=>"1",),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>