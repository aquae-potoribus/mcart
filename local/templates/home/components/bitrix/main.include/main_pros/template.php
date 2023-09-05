<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
IncludeTemplateLangFile(__FILE__);

if($arResult["FILE"] <> '') {?>

    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
        <div class="feature d-flex align-items-start">
            <?include($arResult["FILE"]);?>
        </div>
    </div>

    <?
}
