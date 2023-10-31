<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="side-block side-menu">
	<div class="title-block <?$APPLICATION->ShowProperty("left_menu_color");?>"><?=GetMessage("T_EXAM_MENU_TITLE")?></div>
	<div class="menu-block">
		<ul>
		<?
		foreach($arResult as $arItem):
			if($arItem["DEPTH_LEVEL"] > 1) 
				continue;
		?>
			<?if($arItem["SELECTED"]):?>
				<li class="selected <?=isset($arItem['PARAMS']['ITEM_COLOR']) ? $arItem['PARAMS']['ITEM_COLOR'] : ''?>"><a href="<?=$arItem["LINK"]?>" class=""><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="<?=isset($arItem['PARAMS']['ITEM_COLOR']) ? $arItem['PARAMS']['ITEM_COLOR'] : ''?>"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			
		<?endforeach?>
	</ul>
	</div>
</div> 
<?endif?>
				
				
