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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>


<?foreach($arResult["ITEMS"] as $arItem):?>
<?php //d($arItem)?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="review-text">

			<div class="review-block-title">
				<span class="review-block-name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["FIELDS"]["NAME"]?></a></span>
					<span class="review-block-description"><?=$arItem["DISPLAY_ACTIVE_FROM"]?> <?=GetMessage("YEAR_TITLE")?>,
					<?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>,
					<?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"]?></span></div>

			<div class="review-text-cont">
				<?=$arItem["FIELDS"]["PREVIEW_TEXT"]?>
			</div>
		</div>
		<div class="review-img-wrap"><a href="#"><img src="<? if (isset($arItem['FIELDS']['DETAIL_PICTURE']['ID'])) {
				echo CFile::ResizeImageGet($arItem['FIELDS']['DETAIL_PICTURE']['ID'], array('width'=>68, 'height'=>50), BX_RESIZE_IMAGE_EXACT , true)['src'];
//				$arItem["PREVIEW_PICTURE"]["SRC"];
			} else {
				echo SITE_TEMPLATE_PATH."/img/no_photo.jpg";
		}?>" alt="img"></a></div>
	</div>


<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
