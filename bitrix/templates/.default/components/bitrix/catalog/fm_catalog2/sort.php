<?
$arDisplays = array("block", "list", "table");
if(array_key_exists("display", $_REQUEST) || (array_key_exists("display", $_SESSION)) || $arParams["DEFAULT_LIST_TEMPLATE"]){
    if($_REQUEST["display"] && (in_array(trim($_REQUEST["display"]), $arDisplays))){
        $display = trim($_REQUEST["display"]);
        $_SESSION["display"]=trim($_REQUEST["display"]);
    }
    elseif($_SESSION["display"] && (in_array(trim($_SESSION["display"]), $arDisplays))){
        $display = $_SESSION["display"];
    }
    elseif($arSection["DISPLAY"]){
        $display = $arSection["DISPLAY"];
    }
    else{
        $display = $arParams["DEFAULT_LIST_TEMPLATE"];
    }
}
else{
    $display = "block";
}
$template = "catalog_".$display;
?>
<div class="sort_header view_<?=$display?>">

    <?php
    /**
     * получим свойства для сортировки
     */
    if(isset($arSection['ID'])):?>
        <div class="sort_filter mobile_filter_compact">
            <!--noindex-->
            <?
            $arFilter = ['IBLOCK_ID' => 37, 'ACTIVE' => 'Y', 'PROPERTY_INCLUDE_MAIN' => $arSection['ID']];
            $arSelect = [ 'ID', 'NAME', 'PROPERTY_CODE_PROP' ,'DATE_ACTIVE_FROM'];
            $resSort = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
            $arSort = array();
            while($itemSort = $resSort->Fetch())
            {
                $arSort[] = $itemSort;
            }
            if(count($arSort)==0)
            {
                $resSP = CIBlockSection::GetByID($arSection['ID']);
                if($arSP = $resSP->GetNext())
                {
                    $arFilter = ['IBLOCK_ID' => 37, 'ACTIVE' => 'Y', 'PROPERTY_INCLUDE_MAIN' => $arSP['IBLOCK_SECTION_ID']];
                    $arSelect = [ 'ID', 'NAME', 'PROPERTY_CODE_PROP' ,'DATE_ACTIVE_FROM'];
                    $resSort = CIBlockElement::GetList(array(),$arFilter,false,false,$arSelect);
                    while($itemSort = $resSort->Fetch())
                    {
                        $arSort[] = $itemSort;
                    }
                }
            }
            foreach($arSort as $itemSort):?>
                <?
                /**
                 * отрежем все приставки
                 */
                $nameProp = $itemSort['NAME'];
                $nameProp = str_replace('Основные.','',$nameProp);
                $nameProp = str_replace('Условия.','',$nameProp);
                $nameProp = str_replace('Требования.','',$nameProp);
                $nameProp = str_replace('Характеристики.','',$nameProp);
                $nameProp = str_replace('Документы.','',$nameProp);
                $nameProp = str_replace('Сервисы.','',$nameProp);
                ?>
                <a href="<?=$arResult["SECTION_PAGE_URL"]?>?sort=property_<?=$itemSort['PROPERTY_CODE_PROP_VALUE']?>&method=<?if($_GET["method"]=='desc'):?>asc<?else:?>desc<?endif;?>" class="sort_btn <?if($_GET["sort"] == "property_" . $itemSort['PROPERTY_CODE_PROP_VALUE']):?>current <?=$_GET["method"]?><?else:?>desc<?endif;?>" rel="nofollow">
                    <i class="icon" title="<?=$nameProp?>"></i><span><?=$nameProp?></span><i class="arr icons_fa"></i>
                </a>
            <?
            endforeach;
            ?>
            <!--/noindex-->
        </div>
    <?
    endif;
    ?>
    <div class="sort_display">
        <?foreach($arDisplays as $displayType):?>
            <?
            $current_url = '';
            $current_url = $APPLICATION->GetCurPageParam('display='.$displayType, 	array('display'));
            $url = str_replace('+', '%2B', $current_url);
            ?>
            <a rel="nofollow" href="<?=$url;?>" class="sort_btn <?=$displayType?> <?=($display == $displayType ? 'current' : '')?>"><i title="<?=GetMessage("SECT_DISPLAY_".strtoupper($displayType))?>"></i></a>
        <?endforeach;?>
    </div>
    <div class="clearfix"></div>
    <!--/noindex-->
</div>