<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?$this->setFrameMode(true);?>
<div class="catalog item-views list big-img <?=($arParams["IMAGE_POSITION"] ? "image_".$arParams["IMAGE_POSITION"] : "")?> <?=$templateName;?>">
    <?// top pagination?>
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>

    <?if($arResult["SECTIONS"]):?>

        <div class="items row">
            <?foreach($arResult["SECTIONS"] as $i => $arSection):?>
                <div class="col-md-12">
                    <?if(isset($arSection["NAME"]) && $arSection["NAME"]):?>
                        <!--<h2><a href="<?=$arSection["SECTION_PAGE_URL"];?>" class="dark-color"><?=$arSection["NAME"];?></a></h2>-->
                    <?endif;?>
                    <div class="row">
                        <?// show section items?>
                        <?foreach($arSection["ITEMS"] as $i => $arItem):?>
                            <?
                            // edit/add/delete buttons for edit mode
                            $this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CT_BNL_ELEMENT_DELETE_CONFIRM")));
                            // use detail link?
                            $bDetailLink = $arParams['SHOW_DETAIL_LINK'] != 'N' && (!strlen($arItem['DETAIL_TEXT']) ? ($arParams['HIDE_LINK_WHEN_NO_DETAIL'] !== 'Y' && $arParams['HIDE_LINK_WHEN_NO_DETAIL'] != 1) : true);
                            // preview picture
                            $bImage = isset($arItem['FIELDS']['PREVIEW_PICTURE']) && strlen($arItem['PREVIEW_PICTURE']['SRC']);
                            $imageSrc = ($bImage ? $arItem['PREVIEW_PICTURE']['SRC'] : false);
                            $imageDetailSrc = ($bImage ? $arItem['DETAIL_PICTURE']['SRC'] : false);
                            // show active date period
                            $bActiveDate = strlen($arItem["DISPLAY_PROPERTIES"]["PERIOD"]["VALUE"]) || ($arItem["DISPLAY_ACTIVE_FROM"] && in_array("DATE_ACTIVE_FROM", $arParams["FIELD_CODE"]));
                            ?>

                            <?ob_start();?>
                            <?// element name?>
                            <?if(strlen($arItem["FIELDS"]["NAME"])):?>
                                <div class="title">
                                    <?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" <?=(strpos($arItem['DETAIL_PAGE_URL'], 'http') !== false ? 'target="_blank"' : "")?>><?endif;?>
                                        <?=$arItem['NAME']?>
                                        <?if($bDetailLink):?></a><?endif;?>
                                </div>
                            <?endif;?>

                            <?// date active period?>
                            <?if($bActiveDate):?>
                                <div class="period">
                                    <?if(strlen($arItem["DISPLAY_PROPERTIES"]["PERIOD"]["VALUE"])):?>
                                        <span class="date"><?=$arItem["DISPLAY_PROPERTIES"]["PERIOD"]["VALUE"]?></span>
                                    <?else:?>
                                        <span class="date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span>
                                    <?endif;?>
                                </div>
                            <?endif;?>

                            <?// element preview text?>
                            <?if(strlen($arItem["FIELDS"]["PREVIEW_TEXT"])):?>
                                <div class="previewtext">
                                    <?if($arItem["PREVIEW_TEXT_TYPE"] == "text"):?>
                                        <p><?=$arItem["FIELDS"]["PREVIEW_TEXT"]?></p>
                                    <?else:?>
                                        <?=$arItem["FIELDS"]["PREVIEW_TEXT"]?>
                                    <?endif;?>
                                </div>
                            <?endif;?>
                            <?/*if($bDetailLink):?>
                                <div class="link-block-more">
                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" <?=(strpos($arItem['DETAIL_PAGE_URL'], 'http') !== false ? 'target="_blank"' : "")?> class="btn-inline sm rounded black"><?=GetMessage('TO_ALL')?><i class="fa fa-angle-right"></i></a>
                                </div>
                            <?endif;*/?>

                            <?$textPart = ob_get_clean();?>

                            <?ob_start();?>
                            <?if($bImage):?>
                                <div class="image shine <?=($bImage ? ' w-picture' : ' wo-picture')?>">
                                    <?if($bDetailLink):?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" <?=(strpos($arItem['DETAIL_PAGE_URL'], 'http') !== false ? 'target="_blank"' : "")?>><?endif;?>
                                        <img src="<?=$imageSrc?>" alt="<?=($bImage ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($bImage ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" class="img-responsive" />
                                        <?if($bDetailLink):?></a><?endif;?>
                                </div>
                            <?endif;?>
                            <a class="steck_sravnenia srv_all btn btn-default" href="/catalog/comparisons/"><?=GetMessage('SRV_ALL_PAGE');?></a>
                            <?$imagePart = ob_get_clean();?>
                            <div class="col-md-12">
                                <?/*if($i):?>
							<hr />
						<?endif;*/?>
                                <div id="<?=$this->GetEditAreaId($arItem['ID'])?>" class="item noborder1<?=($bImage ? '' : ' wti')?><?=($bActiveDate ? ' wdate' : '')?>">
                                    <div class="row">
                                        <?if(!$bImage):?>
                                            <div class="col-md-12"><div class="text"><?=$textPart?></div></div>
                                        <?elseif($arParams["IMAGE_POSITION"] == "right"):?>
                                            <div class="col-md-5 col-sm-7 col-xs-12"><div class="text"><?=$textPart?></div></div>
                                            <div class="col-md-7 col-sm-5 col-xs-12"><?=$imagePart?></div>
                                        <?else:?>
                                            <div class="col-md-4 col-sm-5 col-xs-12"><?=$imagePart?></div>
                                            <div class="col-md-8 col-sm-7 col-xs-12 product-list"><div class="text"><?=$textPart?></div>
                                                <?$id_product = Array();?>
                                                <?foreach($arItem['PROPERTIES']['PRODUCTS']['VALUE'] as $item):?>
                                                    <?$id_product[] = $item;?>
                                                <?endforeach;?>
                                                <?
                                                $GLOBALS['arrFilterProp'.$arItem['ID']] = array('ACTIVE' => 'Y', 'ID'=>$id_product);
                                                $APPLICATION->IncludeComponent(
                                                    "bitrix:catalog.section",
                                                    "fm_rait",
                                                    array(
                                                        "IBLOCK_TYPE" => "aspro_next_catalog",
                                                        "IBLOCK_ID" => "35",
                                                        "SECTION_ID" => "",
                                                        "SECTION_CODE" => "",
                                                        "TABS_CODE" => "",
                                                        "SECTION_USER_FIELDS" => array(
                                                            0 => "",
                                                            1 => "",
                                                        ),
                                                        "ELEMENT_SORT_FIELD" => "id",
                                                        "ELEMENT_SORT_ORDER" => "asc",
                                                        "ELEMENT_SORT_FIELD2" => "id",
                                                        "ELEMENT_SORT_ORDER2" => "desc",
                                                        "FILTER_NAME" => "arrFilterProp".$arItem["ID"],
                                                        "INCLUDE_SUBSECTIONS" => "Y",
                                                        "SHOW_ALL_WO_SECTION" => "Y",
                                                        "HIDE_NOT_AVAILABLE" => "N",
                                                        "PAGE_ELEMENT_COUNT" => "5",
                                                        "LINE_ELEMENT_COUNT" => "2",
                                                        "PROPERTY_CODE" => array(
                                                            0 => "OT_DO_GOD_OBSL_MAX",
                                                            1 => "OT_DO_CREDIT_LIM_MAX",
                                                            2 => "OT_DO_LGOTNIY_PERIOD_MAX",
                                                            3 => "OT_DO_PROZ_ST_MAX",
                                                            4 => "",
                                                        ),
                                                        "OFFERS_LIMIT" => "0",
                                                        "SECTION_URL" => "",
                                                        "DETAIL_URL" => "",
                                                        "BASKET_URL" => "/basket/",
                                                        "ACTION_VARIABLE" => "action",
                                                        "PRODUCT_ID_VARIABLE" => "id",
                                                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                                                        "PRODUCT_PROPS_VARIABLE" => "prop",
                                                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                                                        "AJAX_MODE" => "N",
                                                        "AJAX_OPTION_JUMP" => "N",
                                                        "AJAX_OPTION_STYLE" => "Y",
                                                        "AJAX_OPTION_HISTORY" => "N",
                                                        "CACHE_TYPE" => "A",
                                                        "CACHE_TIME" => "36000000",
                                                        "CACHE_GROUPS" => "N",
                                                        "CACHE_FILTER" => "Y",
                                                        "META_KEYWORDS" => "-",
                                                        "META_DESCRIPTION" => "-",
                                                        "ADD_SECTIONS_CHAIN" => "N",
                                                        "USE_COMPARE" => "Y",
                                                        "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
                                                        "COMPARE_FIELD_CODE" => array(
                                                            0 => "NAME",
                                                            1 => "SORT",
                                                            2 => "PREVIEW_PICTURE",
                                                            3 => "",
                                                        ),
                                                        "COMPARE_PROPERTY_CODE" => array(
                                                            0 => "OT_DO_GOD_OBSL_MAX",
                                                            1 => "OT_DO_CREDIT_LIM_MAX",
                                                            2 => "OT_DO_LGOTNIY_PERIOD_MAX",
                                                            3 => "OT_DO_PROZ_ST_MAX",
                                                            4 => "",
                                                        ),
                                                        "COMPARE_OFFERS_FIELD_CODE" => array(
                                                            0 => "NAME",
                                                            1 => "PREVIEW_PICTURE",
                                                            2 => "",
                                                        ),
                                                        "COMPARE_OFFERS_PROPERTY_CODE" => array(
                                                            0 => "MAGAZIN",
                                                            1 => "ID",
                                                            2 => "TSVET",
                                                            3 => "PROIZVODITEL",
                                                            4 => "CML2_ARTICLE",
                                                            5 => "ARTICLE",
                                                            6 => "CML2_BASE_UNIT",
                                                            7 => "VOLUME",
                                                            8 => "CML2_MANUFACTURER",
                                                            9 => "SIZES",
                                                            10 => "CML2_TRAITS",
                                                            11 => "CML2_TAXES",
                                                            12 => "CML2_BAR_CODE",
                                                            13 => "URL2",
                                                            14 => "USLOVIYA_PROTSENTNAYA_STAVKA",
                                                            15 => "USLOVIYA_SROK_KREDITA",
                                                            16 => "USLOVIYA_GODOVOE_OBSLUZHIVANIE",
                                                            17 => "USLOVIYA_POGASHENIE_KREDITA",
                                                            18 => "USLOVIYA_SROK_RASSMOTRENIYA_ZAYAVKI",
                                                            19 => "USLOVIYA_MASTERCARD_STANDARD",
                                                            20 => "USLOVIYA_MASTERCARD_GOLD",
                                                            21 => "USLOVIYA_MASTERCARD_PLATINUM",
                                                            22 => "USLOVIYA_MASTERCARD_WORLD",
                                                            23 => "USLOVIYA_VISA_CLASSIC",
                                                            24 => "USLOVIYA_VISA_PLATINUM",
                                                            25 => "USLOVIYA_VISA_SIGNATURE",
                                                            26 => "USLOVIYA_VISA_GOLD",
                                                            27 => "USLOVIYA_VISA_PREPAID",
                                                            28 => "USLOVIYA_VISA_UNEMBOSSED",
                                                            29 => "USLOVIYA_VISA_INSTANT_ISSUE",
                                                            30 => "USLOVIYA_3D_SECURE",
                                                            31 => "USLOVIYA_CHIP",
                                                            32 => "USLOVIYA_BESKONTAKTNYE_PLATEZHI_PAYWAVE",
                                                            33 => "USLOVIYA_GOOGLE_PAY",
                                                            34 => "USLOVIYA_APPLE_PAY",
                                                            35 => "USLOVIYA_SAMSUNG_PAY",
                                                            36 => "USLOVIYA_PROTSENT_NA_OSTATOK_DA_NET",
                                                            37 => "USLOVIYA_PROTSENT_NA_OSTATOK_",
                                                            38 => "USLOVIYA_KESH_BEK",
                                                            39 => "USLOVIYA_KESH_BEK_NA_VSE_POKUPKI_",
                                                            40 => "USLOVIYA_KESH_BEK_NA_IZBRANNYE_KATEGORII_",
                                                            41 => "USLOVIYA_BONUSY",
                                                            42 => "USLOVIYA_ISPOLZOVANIE_SOBSTVENNYKH_SREDSTV",
                                                            43 => "USLOVIYA_SNYATIE_NALICHNYKH_BEZ_",
                                                            44 => "USLOVIYA_PROTSENT_ZA_SNYATIE_NALICHNYKH",
                                                            45 => "USLOVIYA_MINIMALNAYA_KOMISSIYA_ZA_SNYATIE_NALICHNY",
                                                            46 => "USLOVIYA_LIMIT_NA_SNYATIE_NALICHNYKH_V_MESYATS",
                                                            47 => "TREBOVANIYA_VOZRAST_ZAYEMSHCHIKA_OT",
                                                            48 => "TREBOVANIYA_VOZRAST_ZAYEMSHCHIKA_DO",
                                                            49 => "TREBOVANIYA_STAZH_RABOTY_NA_POSLEDNEM_MESTE_MES",
                                                            50 => "TREBOVANIYA_PODTVERZHDENIE_DOKHODA",
                                                            51 => "TREBOVANIYA_GRAZHDANSTVO_RF",
                                                            52 => "TREBOVANIYA_ZAYAVLENIE_ANKETA",
                                                            53 => "TREBOVANIYA_PASPORT",
                                                            54 => "TREBOVANIYA_SPRAVKA_PO_FORME_BANKA",
                                                            55 => "TREBOVANIYA_SPRAVKA_PO_FORME_2_NDFL",
                                                            56 => "",
                                                        ),
                                                        "COMPARE_ELEMENT_SORT_FIELD" => "shows",
                                                        "COMPARE_ELEMENT_SORT_ORDER" => "asc",
                                                        "SET_TITLE" => "N",
                                                        "SET_STATUS_404" => "N",
                                                        "PRICE_CODE" => array(
                                                            0 => "Обмен по рознице",
                                                        ),
                                                        "USE_PRICE_COUNT" => "Y",
                                                        "SHOW_PRICE_COUNT" => "0",
                                                        "PRICE_VAT_INCLUDE" => "Y",
                                                        "PRODUCT_PROPERTIES" => "",
                                                        "USE_PRODUCT_QUANTITY" => "N",
                                                        "CONVERT_CURRENCY" => "N",
                                                        "DISPLAY_TOP_PAGER" => "N",
                                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                                        "PAGER_TITLE" => "Товары",
                                                        "PAGER_SHOW_ALWAYS" => "N",
                                                        "PAGER_TEMPLATE" => ".default",
                                                        "PAGER_DESC_NUMBERING" => "N",
                                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                                        "PAGER_SHOW_ALL" => "N",
                                                        "DISCOUNT_PRICE_CODE" => "",
                                                        "AJAX_OPTION_ADDITIONAL" => "",
                                                        "SHOW_ADD_FAVORITES" => "Y",
                                                        "SECTION_NAME_FILTER" => "",
                                                        "SECTION_SLIDER_FILTER" => "21",
                                                        "COMPONENT_TEMPLATE" => "fm_rait",
                                                        "OFFERS_FIELD_CODE" => array(
                                                            0 => "ID",
                                                            1 => "",
                                                        ),
                                                        "OFFERS_PROPERTY_CODE" => array(
                                                            0 => "",
                                                            1 => "",
                                                        ),
                                                        "OFFERS_SORT_FIELD" => "sort",
                                                        "OFFERS_SORT_ORDER" => "asc",
                                                        "OFFERS_SORT_FIELD2" => "id",
                                                        "OFFERS_SORT_ORDER2" => "desc",
                                                        "SHOW_MEASURE" => "Y",
                                                        "OFFERS_CART_PROPERTIES" => array(
                                                            0 => "MAGAZIN",
                                                        ),
                                                        "DISPLAY_WISH_BUTTONS" => "Y",
                                                        "SHOW_DISCOUNT_PERCENT" => "N",
                                                        "SHOW_OLD_PRICE" => "Y",
                                                        "SHOW_RATING" => "N",
                                                        "SALE_STIKER" => "SALE_TEXT",
                                                        "SHOW_DISCOUNT_TIME" => "N",
                                                        "STORES" => array(
                                                            0 => "1",
                                                            1 => "",
                                                        ),
                                                        "STIKERS_PROP" => "HIT",
                                                        "SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
                                                        "SHOW_MEASURE_WITH_RATIO" => "N",
                                                        "SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
                                                        "SHOW_BUY_BTN" => "N",
                                                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                                                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                                                        "NAME_BLOCK" => "Топ лучших дебетовых карт 2020 года с Cash Back",
                                                        "COMPOSITE_FRAME_MODE" => "A",
                                                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                                                        "BROWSER_TITLE" => "-",
                                                        "CUSTOM_FILTER" => "",
                                                        "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                                                        "BACKGROUND_IMAGE" => "-",
                                                        "SEF_MODE" => "N",
                                                        "SET_BROWSER_TITLE" => "Y",
                                                        "SET_META_KEYWORDS" => "Y",
                                                        "SET_META_DESCRIPTION" => "Y",
                                                        "SET_LAST_MODIFIED" => "N",
                                                        "USE_MAIN_ELEMENT_SECTION" => "N",
                                                        "DISPLAY_COMPARE" => "Y",
                                                        "COMPARE_PATH" => "",
                                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                                        "SHOW_404" => "N",
                                                        "MESSAGE_404" => "",
                                                        "COMPATIBLE_MODE" => "Y",
                                                        "DISABLE_INIT_JS_IN_COMPONENT" => "N"
                                                    ),
                                                    false
                                                );
                                                ?>
                                            </div>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>

                        <?endforeach;?>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    <?endif;?>

    <?// bottom pagination?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>
<script>
    function kk_add_to_comparisons(id,session){
        $.ajax({
            type:'post',//тип запроса: get,post либо head
            url:'/ajax/add_item_copmparison.php',//url адрес файла обработчика
            data:"session="+session+"&id=" + id,//параметры запроса
            response:'text',//тип возвращаемого ответа text либо xml
            success:function (data) {//возвращаемый результат от сервера
                //location.href = '/basket/';
                console.log(data);
            }
        });
        setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "/ajax/addIconComprCheck.php",
                success: function (data) {//возвращаемый результат от сервера
                    $('.link_compare_icon').html(data);
                }
            });
        },1000);

    }

    $(document).ready(function() {
        $('.steck_sravnenia').click(function (e) {
            e.preventDefault();

            var idStr = $(this).parent().parent().children('.col-md-8').children('.top_wrapper').children('.catalog_block').children('.steck_sravnenie_rait');
            //console.log($(this).parent().parent().children('.col-md-8').children('.top_wrapper').children('.catalog_block').children('.steck_sravnenie_rait').text());

            var sravniRating1 = idStr.text().split("|");
            console.log(sravniRating1);
            $.each(sravniRating1,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });
            location.href = "/catalog/comparisons/";
        });
    });

</script>