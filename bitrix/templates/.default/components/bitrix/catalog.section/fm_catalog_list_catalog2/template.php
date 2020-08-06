<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?
$this_url = $APPLICATION->GetCurPage();
$pos_osago = strpos($this_url, '/strakhovanie/osago/');
$pos_kasko = strpos($this_url, '/strakhovanie/kasko/');
$pos_tourist = strpos($this_url, '/strakhovanie/strakhovanie_puteshestvennikov/');
$pos_ipotechnoe = strpos($this_url, '/strakhovanie/ipotechnoe_strakhovanie/');
$pos_imushchestva = strpos($this_url, '/strakhovanie/strakhovanie_imushchestva/');
$pos_sport = strpos($this_url, '/strakhovanie/sportivnoe_strakhovanie/');
$pos_kreditnye_karty = strpos($this_url,'kreditnye_karty');
$pos_debetovye_karty = strpos($this_url,'debetovye_karty');
$pos_karty_rassrochki = strpos($this_url,'karty_rassrochki');
$pos_zaymov = strpos($this_url, 'zaymy');
$pos_credits = strpos($this_url, 'kredity_nalichnymi');
$pos_ipoteka = strpos($this_url,'ipoteka');
$pos_avtokredity = strpos($this_url,'avtokredity');
$pos_refinansirovanie = strpos($this_url,'refinansirovanie');
$pos_rko = strpos($this_url,'raschetnye_scheta');
?>
<!-- netwiz start разбиение по айдишнику для всех видов продуктов в каталогах-->
<?if($pos_rko > 0):?>
    <div class="raschetnye_scheta_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_refinansirovanie > 0):?>
    <div class="refinansirovanie_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_avtokredity > 0):?>
    <div class="avtokredity_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_ipoteka > 0):?>
    <div class="ipoteka_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_credits > 0):?>
    <div class="kredity_nalichnymi_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_zaymov > 0):?>
    <div class="zaymy_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_karty_rassrochki > 0):?>
    <div class="rass_kart_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_debetovye_karty > 0):?>
    <div class="deb_kart_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>

<?if($pos_kreditnye_karty > 0):?>
    <div class="kr_kart_id_comperison" style="display: none;">
        <?$resStr = "";?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if(strlen($resStr)==0):?>
                <?$resStr = $arItem['ID'];?>
            <?else:?>
                <?$resStr = $resStr . "|" . $arItem['ID'];?>
            <?endif;?>
        <?endforeach;?>
        <?=trim($resStr)?>
    </div>
<?endif;?>
<!-- netwiz end разбиение айдишников продуктов во всех каталогах-->
<?
if($pos_osago>0)
{?>
    <div class="wl-widget">
        <sravni-widget type='osago' theme='sravni_dark' width='1000' partner='1709' inIframe='false' hide-partners='true' carTypeDefault='' offer='1064' affiliate='1' source='ФИН.МАРКЕТ'></sravni-widget>
    </div>
        <div class="title_wrapper">
            <div class="title_block sm">Топовые предложения</div>
        </div>

<?}
if($pos_kasko>0)
{
?>
<div class="wl-widget">
    <sravni-widget typimage_wrapper_blocke='kasko' theme='sravni_dark' width='1000' partner='1709' inIframe='false' hide-partners='true' carTypeDefault='' offer='1066' affiliate='3' source='2002'></sravni-widget>
</div>
    <div class="title_wrapper">
        <div class="title_block sm">Топовые предложения</div>
    </div>
<?}
if($pos_tourist>0)
{?>
    <div class="wl-widget" style="width:100%; margin-bottom: 20px;">
        <script data-product='vzr' src='https://sravni.ru/widgets/loader.js' data-inFrame='true' data-theme-palette='{"elementsColor":"75, 108, 249","activeElementsColor":"25, 118, 210"}' data-aff_id='1709' data-offer_id='1068' data-aff_sub='10' data-source='2002'></script>
    </div>
    <div class="title_wrapper">
        <div class="title_block sm">Топовые предложения</div>
    </div>
<?}
if($pos_ipotechnoe>0)
{?>
    <div class="wl-widget">
        <script data-product='strahovanie-ipoteki' src='https://sravni.ru/widgets/loader.js' data-inFrame='true' data-filters.debt='3000000' data-filters.percent-rate='10' data-filters.bank='' data-filters.gender='female' data-theme-Palette='{"elementsColor":"75, 108, 249","activeElementsColor":"25, 118, 210"}' affiliate='12' source='2002'></script>
    </div>
    <div class="title_wrapper">
        <div class="title_block sm">Топовые предложения</div>
    </div>
<?}
if($pos_imushchestva>0)
{?>
<div class="wl-widget">
    <script data-product='strahovanie-nedvizhimosti' src='https://sravni.ru/widgets/loader.js' data-inFrame='true' data-filters.moving-Property-Sum='1000000' data-filters.trim-Sum='15000000' data-filters.civil-Responsibility-Sum='5000000' data-theme-palette='{"elementsColor":"75, 108, 249","activeElementsColor":"25, 118, 210"}' data-aff_id='1709' data-offer_id='1070' data-aff_sub='14' data-source='2002'></script>
</div>
    <div class="title_wrapper">
        <div class="title_block sm">Топовые предложения</div>
    </div>
<?}
if($pos_sport>0)
{?>
    <div class="wl-widget" style="padding-bottom:20px">
        <script src="https://partner.prosto.insure/widget/common.js"></script>
        <iframe src="https://partner.prosto.insure/widget/sport?rel=u-Wb5Dsr9rZ9oDvU8&bg=blue"
                scrolling="no" style="padding-bottom:20px;width:100%;min-height:670px;min-width:320px;border:none;border-radius:4px;" data-pi-widget="sport">
        </iframe></div>
    <div class="title_wrapper">
        <div class="title_block sm">Топовые предложения</div>
    </div>
<?}
?>
<?if( count( $arResult["ITEMS"] ) >= 1){?>
	<?if($arParams["AJAX_REQUEST"]=="N"){?>
		<div class="display_list <?=($arParams["SHOW_UNABLE_SKU_PROPS"] != "N" ? "show_un_props" : "unshow_un_props");?>">
	<?}?>
	<?$APPLICATION->IncludeFile(SITE_DIR."/catalog/sect2_inc.php", Array(), Array(
            "MODE" => "php",
            "NAME" => "Banner - One request",
        )
    );?>
		<?
		$currencyList = '';
		if (!empty($arResult['CURRENCIES'])){
			$templateLibrary[] = 'currency';
			$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
		}
		$templateData = array(
			'TEMPLATE_LIBRARY' => $templateLibrary,
			'CURRENCIES' => $currencyList
		);
		unset($currencyList, $templateLibrary);

		$arParams["BASKET_ITEMS"] = ($arParams["BASKET_ITEMS"] ? $arParams["BASKET_ITEMS"] : array());

		$arOfferProps = implode(';', $arParams['OFFERS_CART_PROPERTIES']);
		?>
		
		<?  //сортировка по параметрам
		  $array_param=array();
		  $array_none=array();
		  $is_sort=false;
		  foreach($arResult["ITEMS"] as $arItem)
		  {
			//получаем свойства элемента
			$check=false;
			foreach( $arItem["DISPLAY_PROPERTIES"] as $arPropTemp)
			{
			  if($arPropTemp["CODE"]=="MAIN_PROZ_STAVKA" || $arPropTemp["CODE"]=="MAIN_KREDIT_LIMIT" || $arPropTemp["CODE"]=="MAIN_LGOTNIY_PERIOD" || $arPropTemp["CODE"]=="MAIN_GOD_OBSL")
			  {
				if(!empty($arPropTemp["VALUE"]) && $arPropTemp["VALUE"]>0)
				{
					$check=true;$is_sort=true;
					break;
				}
			  }
			}
			if($check)array_push($array_param,$arItem);
			else array_push($array_none,$arItem);
		  }
		  array_push($array_param, ...$array_none);
		  if ($is_sort) $arResult["ITEMS"]=$array_param;
		?>
		<?foreach($arResult["ITEMS"] as $arItem){?>
			<?//php see($arItem);break; ?>
			<?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));

			$arItem["strMainID"] = $this->GetEditAreaId($arItem['ID']);
			$arItemIDs=CNext::GetItemsIDs($arItem);

			$totalCount = CNext::GetTotalCount($arItem, $arParams);
			$arQuantityData = CNext::GetQuantityArray($totalCount, $arItemIDs["ALL_ITEM_IDS"], "N", $arItem["PRODUCT"]["TYPE"]);

			$item_id = $arItem["ID"];
			$strMeasure = '';
			$arAddToBasketData = array();

			$arCurrentSKU = array();

			$elementName = ((isset($arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']) && $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']) ? $arItem['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] : $arItem['NAME']);

			if(!$arItem["OFFERS"] || $arParams['TYPE_SKU'] !== 'TYPE_1'){
				if($arParams["SHOW_MEASURE"] == "Y" && $arItem["CATALOG_MEASURE"]){
					$arMeasure = CCatalogMeasure::getList(array(), array("ID" => $arItem["CATALOG_MEASURE"]), false, false, array())->GetNext();
					$strMeasure = $arMeasure["SYMBOL_RUS"];
				}
				$arAddToBasketData = CNext::GetAddToBasketArray($arItem, $totalCount, $arParams["DEFAULT_COUNT"], $arParams["BASKET_URL"], false, $arItemIDs["ALL_ITEM_IDS"], 'small', $arParams);
			}
			elseif($arItem["OFFERS"]){
				$strMeasure = $arItem["MIN_PRICE"]["CATALOG_MEASURE_NAME"];
				if($arParams['TYPE_SKU'] == 'TYPE_1' && $arItem['OFFERS_PROP'])
				{
					$totalCount = CNext::GetTotalCount($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]], $arParams);
					$arQuantityData = CNext::GetQuantityArray($totalCount, $arItemIDs["ALL_ITEM_IDS"], "N", $arItem["PRODUCT"]["TYPE"]);

					$currentSKUIBlock = $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["IBLOCK_ID"];
					$currentSKUID = $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["ID"];

					$arItem["DETAIL_PAGE_URL"] = $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DETAIL_PAGE_URL"];
					if($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"])
						$arItem["PREVIEW_PICTURE"] = $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"];
					if($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"])
						$arItem["DETAIL_PICTURE"] = $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DETAIL_PICTURE"];

					if($arParams["SET_SKU_TITLE"] === "Y"){
						$skuName = ((isset($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']) && $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']) ? $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'] : $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]['NAME']);
						$arItem["NAME"] = $elementName = $skuName;
					}

					$item_id = $currentSKUID;

					// ARTICLE
					if($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DISPLAY_PROPERTIES"]["ARTICLE"]["VALUE"])
					{
						$arItem["ARTICLE"]["NAME"] = $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DISPLAY_PROPERTIES"]["ARTICLE"]["NAME"];
						$arItem["ARTICLE"]["VALUE"] = (is_array($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DISPLAY_PROPERTIES"]["ARTICLE"]["VALUE"]) ? reset($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DISPLAY_PROPERTIES"]["ARTICLE"]["VALUE"]) : $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["DISPLAY_PROPERTIES"]["ARTICLE"]["VALUE"]);
					}

					$arCurrentSKU = $arItem["JS_OFFERS"][$arItem["OFFERS_SELECTED"]];
					$strMeasure = $arCurrentSKU["MEASURE"];
				}
			}
			?>
			
			<div class="list_item_wrapp item_wrap item">
				<table class="list_item" id="<?=$arItemIDs["strMainID"];?>">
					<tr class="adaptive_name">
						<td colspan="3">
							<div class="desc_name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><span><?=$elementName;?></span></a></div>
						</td>
					</tr>
					<tr>
					<td class="image_block">
						<div class="image_wrapper_block">
							<div class="overlay mobile"></div>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="thumb shine" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['PICT']; ?>">
								<?
								if($arParams["SET_SKU_TITLE"] === "Y" && $arItem['OFFERS']){
									$a_alt = ($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"] && strlen($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"]['DESCRIPTION']) ? $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"]['DESCRIPTION'] : ($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_ALT"] ? $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_ALT"] : $skuName ));
									$a_title = ($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"] && strlen($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"]['DESCRIPTION']) ? $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["PREVIEW_PICTURE"]['DESCRIPTION'] : ($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"] ? $arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"] : $skuName ));
								}
								else{
									$a_alt = ($arItem["PREVIEW_PICTURE"] && strlen($arItem["PREVIEW_PICTURE"]['DESCRIPTION']) ? $arItem["PREVIEW_PICTURE"]['DESCRIPTION'] : ($arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_ALT"] ? $arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_ALT"] : $arItem["NAME"] ));
									$a_title = ($arItem["PREVIEW_PICTURE"] && strlen($arItem["PREVIEW_PICTURE"]['DESCRIPTION']) ? $arItem["PREVIEW_PICTURE"]['DESCRIPTION'] : ($arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"] ? $arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"] : $arItem["NAME"] ));
								}
								?>
								<?if( !empty($arItem["PREVIEW_PICTURE"]) ):?>
									<img data-title="Подробнее" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$a_alt;?>" title="<?=$a_title;?>" />
								<?elseif( !empty($arItem["DETAIL_PICTURE"])):?>
									<?$img = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array( "width" => 200, "height" => 200 ), BX_RESIZE_IMAGE_PROPORTIONAL,true );?>
									<img data-title="Подробнее" src="<?=$img["src"]?>" alt="<?=$a_alt;?>" title="<?=$a_title;?>" />
								<?else:?>
									<img data-title="Подробнее" src="<?=SITE_TEMPLATE_PATH?>/images/no_photo_medium.png" alt="<?=$a_alt;?>" title="<?=$a_title;?>" />
								<?endif;?>
								<?php $key = array_search($arItem["PROPERTIES"]["HARAKTERISTIKI_PLATEZHNAYA_SISTEMA"]["VALUE"], $arResult["listOfVariants"]);?>
								<div class="card-data"><?php if($arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"] != 'kredity_nalichnymi' && $arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"] != 'zaymy' && $arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"] != 'ipoteka' && $arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"] != 'avtokredity' && $arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"] != 'refinansirovanie'):?><img height="20" alt="HARAKTERISTIKI_TIP_KARTY" class="har-logo" src="<?=$arResult["resultImgProp"]["VALUE"][$key];?>"><?endif;?> <?= $arItem["PROPERTIES"]["HARAKTERISTIKI_TIP_KARTY"]["VALUE"] ?></div>
							</a>
						</div>
						<?if($fast_view_text_tmp = CNext::GetFrontParametrValue('EXPRESSION_FOR_FAST_VIEW'))
							$fast_view_text = $fast_view_text_tmp;
						else
							$fast_view_text = GetMessage('FAST_VIEW');?>
						<div class="fast_view_block" data-event="jqm" data-param-form_id="fast_view" data-param-iblock_id="<?=$arParams["IBLOCK_ID"];?>" data-param-id="<?=$arItem["ID"];?>" data-param-item_href="<?=urlencode($arItem["DETAIL_PAGE_URL"]);?>" data-name="fast_view"><?=$fast_view_text;?></div>
						<a class="btn btn-default mobile img-button" target="_blank" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
                            <?if (!empty($arItem['PRODUCT_PROPERTIES_FILL'])){
                                foreach ($arItem['PRODUCT_PROPERTIES_FILL'] as $propID => $propInfo){?>
                                    <input type="hidden" name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]" value="<? echo htmlspecialcharsbx($propInfo['ID']); ?>">
                                    <?if (isset($arItem['PRODUCT_PROPERTIES'][$propID]))
                                        unset($arItem['PRODUCT_PROPERTIES'][$propID]);
                                }
                            }
                            $arItem["EMPTY_PROPS_JS"]="Y";
                            $emptyProductProperties = empty($arItem['PRODUCT_PROPERTIES']);
                            if (!$emptyProductProperties){
                                $arItem["EMPTY_PROPS_JS"]="N";?>
                                <div class="wrapper">
                                    <table>
                                        <?foreach ($arItem['PRODUCT_PROPERTIES'] as $propID => $propInfo){?>
                                            <tr>
                                                <td><? echo $arItem['PROPERTIES'][$propID]['NAME']; ?></td>
                                                <td>
                                                    <?if('L' == $arItem['PROPERTIES'][$propID]['PROPERTY_TYPE']	&& 'C' == $arItem['PROPERTIES'][$propID]['LIST_TYPE']){
                                                        foreach($propInfo['VALUES'] as $valueID => $value){?>
                                                            <label>
                                                                <input type="radio" name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]" value="<? echo $valueID; ?>" <? echo ($valueID == $propInfo['SELECTED'] ? '"checked"' : ''); ?>><? echo $value; ?>
                                                            </label>
                                                        <?}
                                                    }else{?>
                                                        <select name="<? echo $arParams['PRODUCT_PROPS_VARIABLE']; ?>[<? echo $propID; ?>]"><?
                                                            foreach($propInfo['VALUES'] as $valueID => $value){?>
                                                                <option value="<? echo $valueID; ?>" <? echo ($valueID == $propInfo['SELECTED'] ? '"selected"' : ''); ?>><? echo $value; ?></option>
                                                            <?}?>
                                                        </select>
                                                    <?}?>
                                                </td>
                                            </tr>
                                        <?}?>
                                    </table>
                                </div>
                                <?
                            }?>
							<?if(strlen(trim($arItem['PROPERTIES']['URL']['VALUE']))>0):?>
                                <?
                                if(strpos(trim($arItem["PROPERTIES"]["URL"]["VALUE"]) ,'admitad') >-1){
                                    $referer=trim($arItem["PROPERTIES"]["URL"]["VALUE"]) . "subid/" .$_COOKIE['utm_source'] ;

                                }else{
                                    $referer=trim($arItem["PROPERTIES"]["URL"]["VALUE"]) ."&sa=".$_COOKIE['utm_source'] ;
                                }
                                ?>
                                <a class="btn btn-default ofo-href desc" onClick="ym('56316898','reachGoal', 'oformit');" target="_blank" href="<?=$referer?>"><?=GetMessage("LIST_BUTTON_OFO");?></a>
                            <?endif;?>
                    </td>

					<td class="description_wrapp">
						<div class="description">
							<div class="item-title">
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="dark_link"><span><?=$elementName;?></span></a>
							</div>
							<div class="wrapp_stockers">
								<?if($arParams["SHOW_RATING"] == "Y"):?>
									<div class="rating">
										<?$APPLICATION->IncludeComponent(
										   "bitrix:iblock.vote",
										   "element_rating_front",
										   Array(
											  "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
											  "IBLOCK_ID" => $arItem["IBLOCK_ID"],
											  "ELEMENT_ID" =>$arItem["ID"],
											  "MAX_VOTE" => 5,
											  "VOTE_NAMES" => array(),
											  "CACHE_TYPE" => $arParams["CACHE_TYPE"],
											  "CACHE_TIME" => $arParams["CACHE_TIME"],
											  "DISPLAY_AS_RATING" => 'vote_avg'
										   ),
										   $component, array("HIDE_ICONS" =>"Y")
										);?>
									</div>
								<?endif;?>
								<?//=$arQuantityData["HTML"];?>
								<div class="article_block" <?if(isset($arItem['ARTICLE']) && $arItem['ARTICLE']['VALUE']):?>data-name="<?=$arItem['ARTICLE']['NAME'];?>" data-value="<?=$arItem['ARTICLE']['VALUE'];?>"<?endif;?>>
									<?if(isset($arItem['ARTICLE']) && $arItem['ARTICLE']['VALUE']){?>
										<?=$arItem['ARTICLE']['NAME'];?>: <?=$arItem['ARTICLE']['VALUE'];?>
									<?}?>
								</div>
							</div>
							<div class="preview_text">
                                <?
                                $abz = explode ("\n",$arItem["PROPERTIES"]["TEXT_PREIMUSHCHESTVA"]["VALUE"]);
                                for($i=0;$i<count($abz);$i++):?>
                                    <?if(trim(strlen($abz[$i]))==0){continue;}?>
                                    <?=$abz[$i]?><br>
                                <?endfor;?>
                            </div>



						</div>

					</td>
					<td class="information_wrapp main_item_wrapper">
						<div class="information <?=($arItem["OFFERS"] && $arItem['OFFERS_PROP'] ? 'has_offer_prop' : '');?>  inner_content js_offers__<?=$arItem['ID'];?>">
							<div class="cost prices clearfix">
                                
							</div>
							<?if($arParams["SHOW_DISCOUNT_TIME"]=="Y" && $arParams['SHOW_COUNTER_LIST'] != 'N'){?>
								<?$arUserGroups = $USER->GetUserGroupArray();?>
								<?if($arParams['SHOW_DISCOUNT_TIME_EACH_SKU'] != 'Y' || ($arParams['SHOW_DISCOUNT_TIME_EACH_SKU'] == 'Y' && !$arItem['OFFERS'])):?>
									<?$arDiscounts = CCatalogDiscount::GetDiscountByProduct($item_id, $arUserGroups, "N", $min_price_id, SITE_ID);
									$arDiscount=array();
									if($arDiscounts)
										$arDiscount=current($arDiscounts);
									if($arDiscount["ACTIVE_TO"]){?>
										<div class="view_sale_block <?=($arQuantityData["HTML"] ? '' : 'wq');?>">
											<div class="count_d_block">
												<span class="active_to hidden"><?=$arDiscount["ACTIVE_TO"];?></span>
												<div class="title"><?=GetMessage("UNTIL_AKC");?></div>
												<span class="countdown values"><span class="item"></span><span class="item"></span><span class="item"></span><span class="item"></span></span>
											</div>
											<?if($arQuantityData["HTML"]):?>
												<div class="quantity_block">
													<div class="title"><?=GetMessage("TITLE_QUANTITY_BLOCK");?></div>
													<div class="values">
														<span class="item">
															<span class="value" ><?=$totalCount;?></span>
															<span class="text"><?=GetMessage("TITLE_QUANTITY");?></span>
														</span>
													</div>
												</div>
											<?endif;?>
										</div>
									<?}?>
								<?else:?>
									<?$arDiscounts = CCatalogDiscount::GetDiscountByProduct($item_id, $arUserGroups, "N", array(), SITE_ID);
									$arDiscount=array();
									if($arDiscounts)
										$arDiscount=current($arDiscounts);
									?>
									<div class="view_sale_block <?=($arQuantityData["HTML"] ? '' : 'wq');?>" <?=($arDiscount["ACTIVE_TO"] ? '' : 'style="display:none;"');?> >
										<div class="count_d_block">
											<span class="active_to hidden"><?=($arDiscount["ACTIVE_TO"] ? $arDiscount["ACTIVE_TO"] : "");?></span>
											<div class="title"><?=GetMessage("UNTIL_AKC");?></div>
											<span class="countdown values"><span class="item"></span><span class="item"></span><span class="item"></span><span class="item"></span></span>
										</div>
										<?if($arQuantityData["HTML"]):?>
											<div class="quantity_block">
												<div class="title"><?=GetMessage("TITLE_QUANTITY_BLOCK");?></div>
												<div class="values">
													<span class="item">
														<span class="value"><?=$totalCount;?></span>
														<span class="text"><?=GetMessage("TITLE_QUANTITY");?></span>
													</span>
												</div>
											</div>
										<?endif;?>
									</div>
								<?endif;?>
							<?}?>

                            <div class="sku_props">
                                <div class="bx_catalog_item_scu wrapper_sku" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['PROP_DIV']; ?>" data-site_id="<?=SITE_ID;?>" data-id="<?=$arItem["ID"];?>" data-offer_id="1" data-propertyid="1162" data-offer_iblockid="35">
						            <div class="item_wrapper" style="text-align: center">
                                        <?php
                                        $hlblock = \Bitrix\Highloadblock\HighloadBlockTable::getById(4)->fetch(); // id highload блока
                                        $entity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
                                        $entityClass = $entity->getDataClass();

                                        $res = $entityClass::getList(array(
                                            'select' => array('*'),
                                            'filter' => array('UF_XML_ID' => $arItem['PROPERTIES']['MAGAZIN']['VALUE'])
                                        ));
                                        if ($row = $res->fetch()) {
                                            //echo $row["UF_FILE"];
                                            $img_path = CFile::GetPath($row["UF_FILE"]); //ПОЛУЧАЕМ ПУСТЬ К КАРТИНКЕ
                                            echo '<img src="'.$img_path.'" height="60" hspace="5px" alt="'.$img_path.'"/>'; //ВЫВОДИМ КАРТИНКУ
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Искулючаем кнопку "В сравнение" для карт раздела "Страхование".-->
                            <?if($arResult['IBLOCK_SECTION_ID'] == 337){
                                ?><div class="like_icons btn btn-default" style="display: none;">
                                <a onclick="kk_add_to_comparisons(<?=$arItem['ID'];?>,'<?=session_id();?>');">В сравнение</a>
                                </div>
                                <div class="props_list_wrapp elastic_block off" style="display:none">
                                </div>
                            <?}
                            else{?>
                                <div class="like_icons btn btn-default">
                                    <a onclick="kk_add_to_comparisons(<?=$arItem['ID'];?>,'<?=session_id();?>');">В сравнение</a>
                                </div>

                                <?$boolShowOfferProps = ($arItem['OFFERS_PROPS_DISPLAY']);
                                $boolShowProductProps = (isset($arItem['DISPLAY_PROPERTIES']) && !empty($arItem['DISPLAY_PROPERTIES']));?>
                                <?//if($boolShowProductProps || $boolShowOfferProps):?>
                                <div class="props_list_wrapp " style="display:block"><!--elastic_block off-->
                                    <table class="props_list prod">
                                        <?
                                        $arrProp = array();
                                        $arrPropEdIzm = array();
                                        $arFilter = ['IBLOCK_ID' => 37, 'ACTIVE' => 'Y','PROPERTY_INCLUDE_MAIN'=>$arItem['IBLOCK_SECTION_ID']];
                                        $arSelect = [ 'ID', 'NAME', 'PROPERTY_CODE_PROP', 'PROPERTY_ED_IZM' ,'DATE_ACTIVE_FROM'];
                                        $resSort = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
                                        while($itemSort = $resSort->Fetch()):
                                            $arrProp[] = $itemSort['PROPERTY_CODE_PROP_VALUE'];
                                            $arrPropEdIzm[$itemSort['PROPERTY_CODE_PROP_VALUE']] = $itemSort['PROPERTY_ED_IZM_VALUE'];
                                        endwhile;
                                        if(count($arrProp)==0)
                                        {
                                            $resSP = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
                                            if($arSP = $resSP->GetNext())
                                            {
                                                $arFilter = ['IBLOCK_ID' => 37, 'ACTIVE' => 'Y','PROPERTY_INCLUDE_MAIN'=>$arSP['IBLOCK_SECTION_ID']];
                                                $arSelect = [ 'ID', 'NAME', 'PROPERTY_CODE_PROP', 'PROPERTY_ED_IZM' ,'DATE_ACTIVE_FROM'];
                                                $resSort = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
                                                while($itemSort = $resSort->Fetch()):
                                                    $arrProp[] = $itemSort['PROPERTY_CODE_PROP_VALUE'];
                                                    $arrPropEdIzm[$itemSort['PROPERTY_CODE_PROP_VALUE']] = $itemSort['PROPERTY_ED_IZM_VALUE'];
                                                endwhile;
                                            }//if($arSP = $resSP->GetNext())
                                        }//if(count($arrProp)==0)
                                        ?>
                                        <?foreach ($arItem['PROPERTIES'] as $itemPr):?>
                                            <?if(in_array($itemPr['CODE'],$arrProp)):?>
                                                <?php
                                                /**
                                                 * отрежем все приставки
                                                 */
                                                $nameProp = $itemPr['NAME'];
                                                $nameProp = str_replace('Основные.','',$nameProp);
                                                $nameProp = str_replace('Условия.','',$nameProp);
                                                $nameProp = str_replace('Требования.','',$nameProp);
                                                $nameProp = str_replace('Характеристики.','',$nameProp);
                                                $nameProp = str_replace('Документы.','',$nameProp);
                                                $nameProp = str_replace('Сервисы.','',$nameProp);
                                                ?>
                                                <tr>
                                                    <td><span><?=$nameProp?></span></td>
                                                    <?
                                                    /**
                                                     * склоняемость
                                                     */
                                                    $edIzm = $arrPropEdIzm[$itemPr['CODE']];
                                                    if($edIzm=="дней")
                                                    {
                                                        $edIzm = tpl_tpluralForm($itemPr['VALUE'],"день","дня","дней");
                                                    }
                                                    $valP = $itemPr['VALUE'];
                                                    if(is_array($valP)){
                                                        $strRP = "";
                                                        foreach ($valP as $itemAP)
                                                        {
                                                            if(strlen($strRP)==0){
                                                                $strRP = $itemAP;
                                                            }else{
                                                                $strRP = round($strRP) . '-' . round($itemAP);
                                                            }
                                                        }
                                                        $valP = $strRP;
                                                    }
                                                    ?>
                                                    <?php if($edIzm == 'руб.' && $valP > 999):?>
                                                        <td><span><?=formatToHuman($valP);?> <?=$edIzm?></span></td>
                                                    <?php else: ?>
                                                        <td><span><?=$valP?> <?=$edIzm?></span></td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?endif;?>
                                        <?endforeach;?>
                                    </table>
                                    <?if ($boolShowOfferProps){?>
                                        <table class="props_list offers" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['DISPLAY_PROP_DIV']; ?>" style="display: none;"></table>
                                    <?}?>
                                </div>
                            <?}?>

                            <a class="btn btn-default ofo-href mobile" onClick="ym('56316898','reachGoal', 'oformit');" target="_blank" href="<?=$referer?>"><?=GetMessage("LIST_BUTTON_OFO");?></a>

							<?if(!$arItem["OFFERS"] || $arParams['TYPE_SKU'] !== 'TYPE_1'):?>
								<div class="counter_wrapp <?=($arItem["OFFERS"] && $arParams["TYPE_SKU"] == "TYPE_1" ? 'woffers' : '')?>">
									<?if(($arAddToBasketData["OPTIONS"]["USE_PRODUCT_QUANTITY_LIST"] && $arAddToBasketData["ACTION"] == "ADD") && $arAddToBasketData["CAN_BUY"]):?>
										<div class="counter_block" data-offers="<?=($arItem["OFFERS"] ? "Y" : "N");?>" data-item="<?=$arItem["ID"];?>">
											<span class="minus" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['QUANTITY_DOWN']; ?>">-</span>
											<input type="text" class="text" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['QUANTITY']; ?>" name="<? echo $arParams["PRODUCT_QUANTITY_VARIABLE"]; ?>" value="<?=$arAddToBasketData["MIN_QUANTITY_BUY"]?>" />
											<span class="plus" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['QUANTITY_UP']; ?>" <?=($arAddToBasketData["MAX_QUANTITY_BUY"] ? "data-max='".$arAddToBasketData["MAX_QUANTITY_BUY"]."'" : "")?>>+</span>
										</div>
									<?endif;?>
									<div id="<?=$arItemIDs["ALL_ITEM_IDS"]['BASKET_ACTIONS']; ?>" class="button_block <?=(($arAddToBasketData["ACTION"] == "ORDER"/*&& !$arItem["CAN_BUY"]*/) || !$arAddToBasketData["CAN_BUY"] || !$arAddToBasketData["OPTIONS"]["USE_PRODUCT_QUANTITY_LIST"] || $arAddToBasketData["ACTION"] == "SUBSCRIBE" ? "wide" : "");?>">
										<!--noindex-->
											<?=$arAddToBasketData["HTML"]?>
										<!--/noindex-->
									</div>
								</div>
								<?
								if(isset($arItem['PRICE_MATRIX']) && $arItem['PRICE_MATRIX']) // USE_PRICE_COUNT
								{?>
									<?if($arItem['ITEM_PRICE_MODE'] == 'Q' && count($arItem['PRICE_MATRIX']['ROWS']) > 1):?>
										<?$arOnlyItemJSParams = array(
											"ITEM_PRICES" => $arItem["ITEM_PRICES"],
											"ITEM_PRICE_MODE" => $arItem["ITEM_PRICE_MODE"],
											"ITEM_QUANTITY_RANGES" => $arItem["ITEM_QUANTITY_RANGES"],
											"MIN_QUANTITY_BUY" => $arAddToBasketData["MIN_QUANTITY_BUY"],
											"SHOW_DISCOUNT_PERCENT_NUMBER" => $arParams["SHOW_DISCOUNT_PERCENT_NUMBER"],
											"ID" => $arItemIDs["strMainID"],
										)?>
										<script type="text/javascript">
											var <? echo $arItemIDs["strObName"]; ?>el = new JCCatalogSectionOnlyElement(<? echo CUtil::PhpToJSObject($arOnlyItemJSParams, false, true); ?>);
										</script>
									<?endif;?>
								<?}?>
							<?elseif($arItem["OFFERS"]):?>
								<?if(empty($arItem['OFFERS_PROP'])){?>
									<div class="offer_buy_block buys_wrapp woffers">
										<div class="counter_wrapp">
										<?
										$arItem["OFFERS_MORE"] = "Y";
										$arAddToBasketData = CNext::GetAddToBasketArray($arItem, $totalCount, $arParams["DEFAULT_COUNT"], $arParams["BASKET_URL"], false, $arItemIDs["ALL_ITEM_IDS"], 'small read_more1', $arParams);?>
										<!--noindex-->
											<?=$arAddToBasketData["HTML"]?>
										<!--/noindex-->
										</div>
									</div>
								<?}else{?>
									<div class="offer_buy_block">
										<?
										$arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]['IS_OFFER'] = 'Y';
										$arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]['IBLOCK_ID'] = $arParams['IBLOCK_ID'];
										$arAddToBasketData = CNext::GetAddToBasketArray($arItem["OFFERS"][$arItem["OFFERS_SELECTED"]], $totalCount, $arParams["DEFAULT_COUNT"], $arParams["BASKET_URL"], false, $arItemIDs["ALL_ITEM_IDS"], 'small', $arParams);
										?>
										<div class="counter_wrapp">
											<?if(($arAddToBasketData["OPTIONS"]["USE_PRODUCT_QUANTITY_LIST"] && $arAddToBasketData["ACTION"] == "ADD") && $arAddToBasketData["CAN_BUY"]):?>
												<div class="counter_block" data-item="<?=$arItem["OFFERS"][$arItem["OFFERS_SELECTED"]]["ID"];?>">
													<span class="minus" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['QUANTITY_DOWN']; ?>">-</span>
													<input type="text" class="text" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['QUANTITY']; ?>" name="<? echo $arParams["PRODUCT_QUANTITY_VARIABLE"]; ?>" value="<?=$arAddToBasketData["MIN_QUANTITY_BUY"]?>" />
													<span class="plus" id="<? echo $arItemIDs["ALL_ITEM_IDS"]['QUANTITY_UP']; ?>" <?=($arAddToBasketData["MAX_QUANTITY_BUY"] ? "data-max='".$arAddToBasketData["MAX_QUANTITY_BUY"]."'" : "")?>>+</span>
												</div>
											<?endif;?>
											<div id="<?=$arItemIDs["ALL_ITEM_IDS"]['BASKET_ACTIONS']; ?>" class="button_block <?=(($arAddToBasketData["ACTION"] == "ORDER"/*&& !$arItem["CAN_BUY"]*/)  || !$arAddToBasketData["CAN_BUY"] || !$arAddToBasketData["OPTIONS"]["USE_PRODUCT_QUANTITY_LIST"] || $arAddToBasketData["ACTION"] == "SUBSCRIBE" ? "wide" : "");?>">
												<!--noindex-->
													<?=$arAddToBasketData["HTML"]?>
												<!--/noindex-->
											</div>
										</div>
									</div>
									<?
									if(isset($arCurrentSKU['PRICE_MATRIX']) && $arCurrentSKU['PRICE_MATRIX']) // USE_PRICE_COUNT
									{?>
										<?if($arCurrentSKU['ITEM_PRICE_MODE'] == 'Q' && count($arCurrentSKU['PRICE_MATRIX']['ROWS']) > 1):?>
											<?$arOnlyItemJSParams = array(
												"ITEM_PRICES" => $arCurrentSKU["ITEM_PRICES"],
												"ITEM_PRICE_MODE" => $arCurrentSKU["ITEM_PRICE_MODE"],
												"ITEM_QUANTITY_RANGES" => $arCurrentSKU["ITEM_QUANTITY_RANGES"],
												"MIN_QUANTITY_BUY" => $arAddToBasketData["MIN_QUANTITY_BUY"],
												"SHOW_DISCOUNT_PERCENT_NUMBER" => $arParams["SHOW_DISCOUNT_PERCENT_NUMBER"],
												"ID" => $arItemIDs["strMainID"],
												"NOT_SHOW" => "Y",
											)?>
											<script type="text/javascript">
												var <? echo $arItemIDs["strObName"]; ?>el = new JCCatalogSectionOnlyElement(<? echo CUtil::PhpToJSObject($arOnlyItemJSParams, false, true); ?>);
											</script>
										<?endif;?>
									<?}?>
								<?}?>
							<?endif;?>
						</div>
						<div class="basket_props_block" id="bx_basket_div_<?=$arItem["ID"];?>">

							
                        </div>
					</td></tr>
                    <tr>
                        <td colspan="3"><div class="stickers swiper-container">
                                <div class="<?//da-props da-props_catalog_list?> swiper-wrapper">
                                    <?//see($arItem["PROPERTIES"]["USLOVIYA_ISP_SOB_STR"]["VALUE"]);?>
                                    <?$prop = ($arParams["STIKERS_PROP"] ? $arParams["STIKERS_PROP"] : "HIT");?>
                                    <?foreach(CNext::GetItemStickers($arItem["PROPERTIES"][$prop]) as $arSticker):?>
                                        <div class="swiper-slide"><div class="<?=$arSticker['CLASS']?>"><?=$arSticker['VALUE']?></div></div>
                                    <?endforeach;?>
                                    <?if($arParams["SALE_STIKER"] && $arItem["PROPERTIES"][$arParams["SALE_STIKER"]]["VALUE"]){?>
                                        <div class="swiper-slide"><div class="sticker_sale_text"><?=$arItem["PROPERTIES"][$arParams["SALE_STIKER"]]["VALUE"];?></div></div>
                                    <?}?>
                                    <?//arDiscounts?>
				    <?php shuffle($arItem["PROPERTIES"])?>
                                    <?php foreach($arItem["PROPERTIES"] as $prop): ?>
                                        <?php if($prop["VALUE"] == 'Да' && $prop["SHOW_IN_TAGS"] == 'Y'): ?>
                                            <div class="sticker_s_nizkim_protsentom swiper-slide"><?=$prop["NAME"];?></div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <!--<div class="swiper-scrollbar"></div>-->
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </td>
                    </tr>
				</table>
			</div>
		<?}?>

	<?if($arParams["AJAX_REQUEST"]=="N"){?>
		</div>
	<?}?>
	<?if($arParams["AJAX_REQUEST"]=="Y"){?>
		<div class="wrap_nav">
	<?}?>
	<div class="bottom_nav <?=$arParams["DISPLAY_TYPE"];?>" <?=($arParams["AJAX_REQUEST"]=="Y" ? "style='display: none; '" : "");?>>
		<?if( $arParams["DISPLAY_BOTTOM_PAGER"] == "Y" ){?><?=$arResult["NAV_STRING"]?><?}?>
	</div>
	<?if($arParams["AJAX_REQUEST"]=="Y"){?>
		</div>
	<?}?>
<?}else{?>
    <script>
        // $(document).ready(function(){
        $('.sort_header').animate({'opacity':'1'}, 500);
        // })
    </script>
    <div class="no_goods">
        <div class="no_products">
            <div class="wrap_text_empty">
                <?if($_REQUEST["set_filter"]){?>
                    <?$APPLICATION->IncludeFile(SITE_DIR."include/section_no_products_filter.php", Array(), Array("MODE" => "html",  "NAME" => GetMessage('EMPTY_CATALOG_DESCR')));?>
                <?}else{?>
                    <?$APPLICATION->IncludeFile(SITE_DIR."include/section_no_products.php", Array(), Array("MODE" => "html",  "NAME" => GetMessage('EMPTY_CATALOG_DESCR')));?>
                <?}?>
            </div>
        </div>
        <?if($_REQUEST["set_filter"]){?>
            <span class="button wide btn btn-default"><?=GetMessage('RESET_FILTERS');?></span>
        <?}?>
    </div>
<?}?>

<script>
    BX.message({
        QUANTITY_AVAILIABLE: '<? echo COption::GetOptionString("aspro.next", "EXPRESSION_FOR_EXISTS", GetMessage("EXPRESSION_FOR_EXISTS_DEFAULT"), SITE_ID); ?>',
        QUANTITY_NOT_AVAILIABLE: '<? echo COption::GetOptionString("aspro.next", "EXPRESSION_FOR_NOTEXISTS", GetMessage("EXPRESSION_FOR_NOTEXISTS"), SITE_ID); ?>',
        ADD_ERROR_BASKET: '<? echo GetMessage("ADD_ERROR_BASKET"); ?>',
        ADD_ERROR_COMPARE: '<? echo GetMessage("ADD_ERROR_COMPARE"); ?>',
    });
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
        $('.svgzaimi').click(function (e) {
            e.preventDefault();

            var arrayOfStrings1 = $('.kr_kart_id_comperison').text().split("|");
            $.each(arrayOfStrings1,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings2 = $('.deb_kart_id_comperison').text().split("|");
            $.each(arrayOfStrings2,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings3 = $('.rass_kart_id_comperison').text().split("|");
            $.each(arrayOfStrings3,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings4 = $('.zaymy_id_comperison').text().split("|");
            $.each(arrayOfStrings4,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings5 = $('.kredity_nalichnymi_id_comperison').text().split("|");
            $.each(arrayOfStrings5,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings6 = $('.ipoteka_id_comperison').text().split("|");
            $.each(arrayOfStrings6,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings7 = $('.avtokredity_id_comperison').text().split("|");
            $.each(arrayOfStrings7,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings8 = $('.refinansirovanie_id_comperison').text().split("|");
            $.each(arrayOfStrings8,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            var arrayOfStrings9 = $('.raschetnye_scheta_id_comperison').text().split("|");
            $.each(arrayOfStrings9,function(index,value){
                kk_add_to_comparisons(value,'<?=session_id();?>')
            });

            location.href = "/catalog/comparisons/";
        });
    });

    /*$(document).ready(function(){
        $.ajax({
            url: "/local/templates/aspro_next/page_blocks/header_13.php",
            type: "POST",
            data: "distance="+distance,
            success: function(data){
                console.log(data);
            }
        });
    });*/
</script>