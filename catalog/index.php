<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>

    <section class="hero hero--catalog">
        <div class="container">
            <nav aria-label="breadcrumb bg-transparent">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                    <li class="breadcrumb-item"><a href="catalog.html">Каталог</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Промышленные материалы</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="catalog">
        <div class="container">
            <h1 class="catalog__title">Каталог</h1>
            <div class="catalog__wrapper">
                <form class="catalog__filters" action="post">
                    <button class="filters__button">Фильтры</button>
                    <div class="filters__wrapper">
                        <ul class="filters">
                            <li class="filter">
                                <button
                                        class="filter__button filter__button--1"
                                        type="button">
                                    Разделы
                                </button>
                                <ul class="filter__items filter__items--1">
                                    <li><a href="#">Материалы для деревообрабатывающей промышленности</a></li>
                                    <li class="active"><a href="#">Материалы для деревообрабатывающей промышленности</a></li>
                                    <li><a href="#">Материалы для деревообрабатывающей промышленности</a></li>
                                    <li><a href="#">Материалы для деревообрабатывающей промышленности</a></li>
                                </ul>
                            </li>
                            <li class="filter">
                                <button
                                        class="filter__button filter__button--2"
                                        type="button">
                                    Фильтр по параметру
                                </button>
                                <ul class="filter__items filter__items--2">
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter2-1" name="filter2-1">
                                        <label class="filter__label" for="filter2-1">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter2-2" name="filter2-2">
                                        <label class="filter__label" for="filter2-2">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter2-3" name="filter2-3">
                                        <label class="filter__label" for="filter2-3">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter2-4" name="filter2-4">
                                        <label class="filter__label" for="filter2-4">
                                            Параметр
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="filter">
                                <button
                                        class="filter__button filter__button--3"
                                        type="button">
                                    Фильтр по параметру
                                </button>
                                <ul class="filter__items filter__items--3">
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter3-1" name="filter3-1">
                                        <label class="filter__label" for="filter3-1">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter3-2" name="filter3-2">
                                        <label class="filter__label" for="filter3-2">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter3-3" name="filter3-3">
                                        <label class="filter__label" for="filter3-3">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter3-4" name="filter3-4">
                                        <label class="filter__label" for="filter3-4">
                                            Параметр
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="filter">
                                <button
                                        class="filter__button filter__button--4"
                                        type="button">
                                    Фильтр по параметру
                                </button>
                                <ul class="filter__items filter__items--4">
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter4-1" name="filter4-1">
                                        <label class="filter__label" for="filter4-1">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter4-2" name="filter4-2">
                                        <label class="filter__label" for="filter4-2">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter4-3" name="filter4-3">
                                        <label class="filter__label" for="filter4-3">
                                            Параметр
                                        </label>
                                    </li>
                                    <li>
                                        <input class="filter__input" type="checkbox" id="filter4-4" name="filter4-4">
                                        <label class="filter__label" for="filter4-4">
                                            Параметр
                                        </label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <button class="filters__submit" type="submit">Применить</button>
                        <button class="filters__clear">Сбросить все</button>
                    </div>
                </form>
                <div class="catalog__main">
                    <form action="post" class="catalog-form">
                        <input class="catalog-form__search" type="text" name="catalog-search" required placeholder="Поиск по каталогу">
                        <button class="catalog-form__submit"type="submit">Найти</button>
                        <button class="catalog-form__show d-sm-none">Найти</button>
                    </form>
                    <div class="main__items">
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                        <li class="main__item">
                            <a href="card.html">
                                <img class="main__image" src="<?=SITE_TEMPLATE_PATH?>/element/img/page-catalog/item-1.jpg" alt="">
                                <p class="main__name">Название товара в каталоге в несколько строк</p>
                            </a>
                            <a class="main__brand" href="#">Brand</a>
                            <a href="card.html" class="main__price">от 1 528 руб.</a>
                        </li>
                    </div>
                    <button class="catalog__button">Показать еще</button>
                </div>
            </div>
            <div class="catalog__text">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut tenetur sequi iusto doloribus iste id, incidunt odit cum ullam facere eum fugit deserunt? Sunt exercitationem ab culpa incidunt cum assumenda aliquid commodi id harum omnis, nam enim voluptatem quia eos aspernatur optio modi voluptas debitis eveniet, perferendis eaque voluptates iusto, hic dignissimos. Enim, doloremque, at cum a dignissimos ipsam sunt assumenda minima nemo, iste minus quo saepe alias temporibus magni corrupti perferendis impedit! Magnam, illum, qui quaerat facere harum atque quia similique et mollitia eius assumenda maxime beatae laudantium quis? Similique rem, perspiciatis quisquam tempore minima iste ducimus? Odio, voluptate.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit et quo repellendus provident, aspernatur eius voluptatum suscipit mollitia facere, odit vero! Similique quidem laboriosam, architecto, velit at quod ratione molestiae deserunt, eligendi optio ipsum culpa! Blanditiis sint totam id. Deleniti vitae quo numquam ea ratione explicabo, magni veritatis animi rerum!</p>
            </div>
        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>