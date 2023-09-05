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

    <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <?=GetMessage("FOOTER_COPYRIGHT_TITLE");?> &copy;</script>
                <script>document.write(new Date().getFullYear());</script>
                <?=GetMessage("FOOTER_COPYRIGHT_TEXT");?>
                <i class="icon-heart text-danger" aria-hidden="true"></i> <?=GetMessage("FOOTER_COPYRIGHT_BY");?> <a href="https://colorlib.com"
                                                                                target="_blank"><?=GetMessage("FOOTER_COPYRIGHT_COMPANY");?></a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>

    <?
	include($arResult["FILE"]);
}
