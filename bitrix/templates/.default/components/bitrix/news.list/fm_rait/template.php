<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

        <div class="slider_team_new">
            <ul  id="owl_carousel_3" class="slider_team_new_list owl-carousel owl-theme">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <li class="slider_team_item">				
                        <div class="slider_team_img">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<div class="title_name"><?=$arItem["NAME"]?></div>			
								<img class="" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
							</a>
                        </div>						
                    </li>
                <?endforeach;?>
            </ul>
        </div>

