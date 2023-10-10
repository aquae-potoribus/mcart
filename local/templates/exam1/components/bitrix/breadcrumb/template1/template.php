<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;



			foreach($arResult as $arItem):
				if($arItem["DEPTH_LEVEL"] > 1)
					continue;
				?>
				<?if($arItem["SELECTED"]):?>
					<span ><?=$arItem["TEXT"]?></span>
				<?else:?>
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?endif?>

			<?endforeach?>


<!--			<a href="">Главная</a>-->
<!--			<a href="">Мебель</a>-->
<!--			<span>Выставки и события</span>-->

<?


//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '	
	<div class="breadcrumbs-box">
		<div class="inner-wrap">
		';


$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
				
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
					'.$title.'
				</a>
			';
	}
	else
	{
		$strReturn .= '
				<span>'.$title.'</span>
			';
	}
}

$strReturn .= '
		</div>
	</div>
';

return $strReturn;
