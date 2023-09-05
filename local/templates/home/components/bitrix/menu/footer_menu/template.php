<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="col-lg-4 mb-5 mb-lg-0">
		<div class="row mb-5">
			<div class="col-md-12">
				<h3 class="footer-heading mb-4">Navigations</h3>
			</div>
			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">
<!--					<li><a href="#">Home</a></li>-->
<!--					<li><a href="#">Buy</a></li>-->
<!--					<li><a href="#">Rent</a></li>-->
<!--					<li><a href="#">Properties</a></li>-->
<!--				</ul>-->
<!--			</div>-->
<!--			<div class="col-md-6 col-lg-6">-->
<!--				<ul class="list-unstyled">-->
<!--					<li><a href="#">About Us</a></li>-->
<!--					<li><a href="#">Privacy Policy</a></li>-->
<!--					<li><a href="#">Contact Us</a></li>-->
<!--					<li><a href="#">Terms</a></li>-->
<!--				</ul>-->
<!--			</div>-->

<?
$midle = round((count($arResult))/2);
$iter = 1;
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
<!--				<ul>-->
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
<!--				<ul>-->
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>


	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
	<? if ($iter == $midle) {
		echo '
				</ul>
			</div>
			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">';
	}
	$iter++;?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
			</ul>
		</div>
	</div>
</div>
<div class="menu-clear-left"></div>
<?endif?>