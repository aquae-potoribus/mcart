<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<?php d($arResult)?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arResult['FIELDS']['DETAIL_TEXT']?>
		</div>
		<div class="review-autor">
			<?=$arResult['NAME']?>, <?=$arResult['DISPLAY_ACTIVE_FROM']?> <?=GetMessage("YEAR_TITLE")?>, <?=$arResult['DISPLAY_PROPERTIES']['POSITION']['VALUE']?>, <?=$arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE']?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<? if (isset($arResult['FIELDS']['DETAIL_PICTURE']['SRC'])) {
			echo $arResult['FIELDS']['DETAIL_PICTURE']['SRC'];
		} else {
			echo SITE_TEMPLATE_PATH."/img/no_photo.jpg";
		}?>" alt="img"></div>
</div>
<div class="exam-review-doc">
	<? if ($arResult['DISPLAY_PROPERTIES']['FILES']['VALUE'] <> false) {
		?><p><?=GetMessage("DOCUMENT_TITLE");?>:</p><?
		if (count($arResult['DISPLAY_PROPERTIES']['FILES']['VALUE']) <> 1) {
			$massiv = $arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'];
		} else {
			$massiv = array(
				"SRC"=>$arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE'],
				"ORIGINAL_NAME"=>$arResult['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE']
			);
		}
		?>

		<?
		foreach ($massiv as $FileId) {
			$srcFile = $FileId["SRC"];
			$NameFile = $FileId["ORIGINAL_NAME"];

		?>

		<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/pdf_ico_40.png"><a href="<?=$srcFile?>" download><?=$NameFile?></a></div>
		<?}?>
	<?}?>
</div>



