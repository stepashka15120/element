<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <?use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/slick.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/slick-theme.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/fontello.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/maginfic-popup.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/main.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/catalog.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/contacts.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/galery.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. "/element/css/spisok.min.css");


    ?>

</head>
<body>
<?$APPLICATION->ShowPanel()?>
<header class="header">
    <div class="contact">
        <div class="container row align-items-center">
            <a class="contact__address col-xs col-sm-6" href="contacts.html">г. Москва, ул. Горького, д. 123</a>
            <div class="contact__items col-xs col-sm-6 col-md-5 col-lg-4 clo-xl-3 d-flex justify-content-between ">
                <a href="tel:+74959999999">+7 495 999 99 99</a>
                <a href="mailto:mail@sitename.ru">mail@sitename.ru</a>
            </div>
        </div>
    </div>
    <div class="header__main">
        <div class="container row">
            <a href="/" class="header__logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/element/img/header/logo.png" alt="Логотип компании Элемент">
                <span>Элемент</span>
            </a>
            <div class="header__navigation">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent pr-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                            false
                        );?>
                    </div>
                </nav>
                <form class="form-inline">
                    <div class="form__search">
                        <label class="search__label" for="form-search">Найти</label>
                        <input class="form-control mr-lg-2" id="form-search" type="search" placeholder="Поиск по сайту..." aria-label="Search">
                    </div>
                    <button class="btn btn-outline-secondary my-2 my-sm-1" type="submit"></button>
                </form>
                <a class="btn list-icon" href="spisok.html"></a>
            </div>
        </div>
    </div>
</header>
<main class="main">