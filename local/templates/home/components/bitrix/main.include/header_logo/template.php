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

    <div class="col-8 col-md-8 col-lg-4">
        <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong>HomeSpace<span
                        class="text-danger">.</span></strong></a></h1>
    </div>

<?
    include($arResult["FILE"]);
}