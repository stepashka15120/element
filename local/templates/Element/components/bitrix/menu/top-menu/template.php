<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="navbar-nav">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<a class="nav-item nav-link active" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?><span class="sr-only">(current)</span></a>
	<?else:?>
		<a class="nav-item nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	<?endif?>
	
<?endforeach?>
</div>
<?endif?>