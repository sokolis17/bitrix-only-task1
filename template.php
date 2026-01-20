<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="article-list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <a class="article-item article-list__item" href="<? echo $arItem["DETAIL_PAGE_URL"]; ?>">
            <div class="article-item__background">
                <img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>" alt="какая то картинка" />
            </div>
            <div class="article-item__wrapper">
                <div class="article-item__title">
                    <? echo $arItem["NAME"]; ?>
                </div>
                <div class="article-item__content">
                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                </div>
            </div>
        </a>

    <? endforeach; ?>
</div>