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

if($arResult["FILE"] <> '') {?>

    <div class="col-lg-4">
        <div class="mb-5">
            <h3 class="footer-heading mb-4"><?=GetMessage("FOOTER_ABOUT_TITLE");?></h3>
            <p><?=GetMessage("FOOTER_ABOUT_DESCRIPTION");?></p>
        </div>
    </div>
    
    <?
	include($arResult["FILE"]);
}
