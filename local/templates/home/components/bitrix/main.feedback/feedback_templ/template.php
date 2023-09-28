<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="site-section">
	<div class="container">
		<div class="row">
			
<div class="col-md-12 col-lg-8 mb-5">

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form method="POST" action="<?=POST_FORM_ACTION_URI?>" class="p-5 bg-white border">
<?=bitrix_sessid_post()?>
	<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
			<label class="font-weight-bold" for="fullname">Full Name</label>
			<input type="text" id="fullname" class="form-control" placeholder="Full Name" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="email">Email</label>
			<input type="email" id="email" class="form-control" placeholder="Email Address" value="<?=$arResult["AUTHOR_EMAIL"]?>">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="email">Subject</label>
			<input type="text" id="subject" class="form-control" placeholder="Enter Subject">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<label class="font-weight-bold" for="message">Message</label>
			<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
		</div>
	</div>

<!--	<div class="mf-name">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_NAME")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<input type="text" name="user_name" value="--><?php //=$arResult["AUTHOR_NAME"]?><!--">-->
<!--	</div>-->
<!--	<div class="mf-email">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_EMAIL")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<input type="text" name="user_email" value="--><?php //=$arResult["AUTHOR_EMAIL"]?><!--">-->
<!--	</div>-->
<!--	<div class="mf-message">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_MESSAGE")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<textarea name="MESSAGE" rows="5" cols="40">--><?php //=$arResult["MESSAGE"]?><!--</textarea>-->
<!--	</div>-->

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<div class="row form-group">
		<div class="col-md-12">
			<input type="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary  py-2 px-4 rounded-0">
		</div>
	</div>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
<!--	<input type="submit" name="submit" value="--><?php //=GetMessage("MFT_SUBMIT")?><!--">-->
</form>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>

</div>
</div>
</div>