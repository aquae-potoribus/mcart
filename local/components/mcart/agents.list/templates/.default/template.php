<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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

/*
 * Для постраничной навигации использовать компонент bitrix:main.pagenavigation
 */
?>

<div class="site-section site-section-sm bg-light">
    <div class="container agents-list">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2><?=GetMessage("AGENTS_TITLE")?></h2>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <?foreach($arResult['AGENTS']["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="agent__card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="small-info">
                        <div class="avatar" style="background-image: url(<?if($arItem['UF_AVATAR']):?><?=$arItem['UF_AVATAR']?><?else:?><?=$this->GetFolder()?>/images/no-avatar.png<?endif?>);"></div>
                        <div class="info">
                            <div class="name"><?=$arItem['UF_NAME']?></div>
                        </div>
                    </div>
                    <div class="agent__card_item">
                        <div class="agent__card_info">
                            <div class="card__info_item">
                                <div class="position"><?=GetMessage("AGENTS_EMAIL")?>: </div>
                                <div class="name"><?=$arItem['UF_EMAIL']?></div>
                            </div>
                            <div class="card__info_item">
                                <div class="position"><?=GetMessage("AGENTS_PHONE")?>: </div>
                                <div class="name"><?=$arItem['UF_PHONE']?></div>
                            </div>
                            <div class="card__info_item">
                                <div class="position"><?=GetMessage("AGENTS_ACTIVITY")?>:</div>
                                <div class="name"><?=$arItem['UF_TYPE_ACTIVITY']?></div>
                            </div>
                        </div>
                    </div>
                    <a class="star <?if(in_array($arItem['ID'],$arResult["STAR_AGENTS"])) echo 'active'?>" data-id="<?=$arItem['ID']?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            <?endforeach;?>
        </div>

        <?
        $APPLICATION->IncludeComponent("bitrix:main.pagenavigation", "page_nav", Array(
            "NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"]
        ),
            false
        );
        ?>

    </div>
</div>


