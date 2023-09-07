<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="col-lg-4 mb-5 mb-lg-0">
		<div class="row mb-5">
			<div class="col-md-12">
				<h3 class="footer-heading mb-4">Navigations</h3>
			</div>
			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">

<?
$midle = round((count($arResult))/2);
$iter = 1;
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["PERMISSION"] > "D" ):?>
		<?if ($arItem["IS_PARENT"]):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="has-children <?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
					<ul class="dropdown">
			<?else:?>
				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?> has-children"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
					<ul class="dropdown">
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="<?if ($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
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