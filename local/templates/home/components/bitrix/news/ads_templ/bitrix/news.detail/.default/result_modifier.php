<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {die();} ?>
<?

$VALUES = array();
$res = $arResult["PROPERTIES"]["IMAGE_GALLERY"]["VALUE"];
foreach ($res as $value) {
    $VALUES[] =	CFile::GetPath($value);
    $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY_ARRAY"] = $VALUES;
}

$VALUES = array();
$res = $arResult["PROPERTIES"]["ADDITIONAL_MATERIALS"]["VALUE"];
foreach ($res as $value) {
    $VALUES[] =	CFile::GetPath($value);
    $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"] = $VALUES;
}
?>