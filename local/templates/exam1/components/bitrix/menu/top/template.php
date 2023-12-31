<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>

    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
                        <li class="main-page"><a href="<?=SITE_DIR?>">Главная</a>
                        </li>




    <?
    $previousLevel = 0;
    foreach ($arResult as $arItem):?>

        <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
            <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
        <? endif ?>

        <? if ($arItem["PERMISSION"] > "D"):?>
            <? if ($arItem["IS_PARENT"]):?>

                <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li><a href="<?= $arItem["LINK"] ?>" class="<?= isset($arItem['PARAMS']['ITEM_COLOR']) ? 'color-'.$arItem['PARAMS']['ITEM_COLOR'] : ''?>"><?= $arItem["TEXT"] ?></a>
                    <ul>
                <? else:?>
                    <li><a href="<?= $arItem["LINK"] ?>" class="<?= isset($arItem['PARAMS']['ITEM_COLOR']) ? 'color-'.['PARAMS']['ITEM_COLOR'] : ''?>"><?= $arItem["TEXT"] ?></a>
                    <ul>
                <? endif ?>

                <? if (isset($arItem["PARAMS"]["ITEM_DESCR"])) {?>
                    <div class="menu-text"><?=$arItem["PARAMS"]["ITEM_DESCR"]?></div>
                <?}?>

            <? else:?>

                <? if ($arItem["DEPTH_LEVEL"] == 1):?>
                    <li><a href="<?= $arItem["LINK"] ?>"
                           class="<?= isset($arItem['PARAMS']['ITEM_COLOR']) ? 'color-'.$arItem['PARAMS']['ITEM_COLOR'] : ''?>"><?= $arItem["TEXT"] ?></a>
                    </li>
                <? else:?>
                    <li><a href="<?= $arItem["LINK"] ?>" class="<?= isset($arItem['PARAMS']['ITEM_COLOR']) ? 'color-'.$arItem['PARAMS']['ITEM_COLOR'] : ''?>"><?= $arItem["TEXT"] ?></a></li>
                <? endif ?>
                <? if (isset($arItem["PARAMS"]["ITEM_DESCR"])) {?>
                    <div class="menu-text"><?=$arItem["PARAMS"]["ITEM_DESCR"]?></div>
                <?}?>

            <? endif ?>
        <? endif ?>
        <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

    <? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>
                </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
<? endif ?>