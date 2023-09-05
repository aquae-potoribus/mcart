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

if($arResult["FILE"] <> '') { ?>

    <div class="col-6 col-md-6 text-right">
        <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
        <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
        <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
    </div>

    <?
    include($arResult["FILE"]);
}