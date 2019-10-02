<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<form class="card" action="post">
    <div class="container">
        <h1 class="card__title"><?=$arResult["NAME"]?></h1>
        <ul class="card__types">
            <?foreach($arResult["PROPERTIES"]["TAGS"]["VALUE"] as $arTags):?>
            <li class="card__type"><?=$arTags?></li>
            <?endforeach;?>
        </ul>
        <div class="card__wrapper">
            <div class="card__info">
                <div class="card__chars">
                    <h2 class="chars__title">Характеристики</h2>
                    <table class="chars__items">
                        <tr>
                            <td>Бренд:</td>
                            <td><?=$arResult["PROPERTIES"]["BRAND"]["VALUE"]?></td>
                        </tr>
                        <tr>
                            <td>Артикул:</td>
                            <td><?=$arResult["PROPERTIES"]["ARTICLE"]["VALUE"]?></td>
                        </tr>
                        <tr>
                            <td>Глянец:</td>
                            <td><?=$arResult["PROPERTIES"]["GLOSS"]["VALUE"]?></td>
                        </tr>
                        <tr>
                            <td>Время высыхания:</td>
                            <td><?=$arResult["PROPERTIES"]["DRYING_TIME"]["VALUE"]?></td>
                        </tr>
                        <tr>
                            <td>Плотность:</td>
                            <td><?=$arResult["PROPERTIES"]["DENSITY"]["VALUE"]?></td>
                        </tr>
                    </table>
                    <button class="chars__button">Все характеристики</button>
                </div>
                <div class="card__volume">
                    <div class="form-group">
                        <label class="volume__title" for="volumeSelect">Объем</label>
                        <select class="form-control" id="volumeSelect">
                            <?foreach($arResult["PROPERTIES"]["SIZE"]["VALUE"] as $arSize):?>
                            <option value="<?=$arSize?>"><?=$arSize?> л</option>
                            <?endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="card__nums">
                    <button class="nums__minus">Меньше</button>
                    <label class="nums__label" for="card-numbers">Количество
                        <input class="nums__input" name="card-numbers" type="number" value="1" id="card-numbers" min="1">
                    </label>
                    <button class="nums__plus">Больше</button>
                </div>
                <div class="card__price">
                    <span class="price"><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> руб.</span>
                </div>
                <button type="submit" class="price__buy">Купить</button>
            </div>
            <div class="card__wrapper-right">
                <div class="card__photos">
                    <?foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $FILE):?>
                        <?$img = CFile::GetFileArray($FILE);?>
                        <a class="magnific-image" href="<?=$img["SRC"]?>" title="big product photo">
                        <img src="<?=$img["SRC"]?>" alt="Фото товара 1" class="card__photo">
                    </a>
                    <?endforeach;?>
                </div>
                <div class="card__photos--small">
                    <?foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $FILE):?>
                    <?$img = CFile::GetFileArray($FILE);?>
                    <img src="<?=$img["SRC"]?>" alt="Фото товара 1" class="card__photo">
                    <?endforeach;?>
                </div>
            </div>
        </div>
    </div>

    <div class="card__tab-nav">
        <div class="container">
            <ul class="tab-nav__items">
                <li class="tab-nav__item tab-nav__descr tab-nav__item--active"><a href="#">Описание</a></li>
                <li class="tab-nav__item tab-nav__chars"><a href="#">Характеристики</a></li>
                <li class="tab-nav__item tab-nav__docs"><a href="#">Документы</a></li>
            </ul>
        </div>
    </div>

    <div class="card__tab-items">
        <div class="container">
            <div class="tab__item tab__descr active">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam harum culpa pariatur cum sint, id eos ipsa rerum! Facilis magnam commodi, voluptate sequi mollitia, ipsum porro vel pariatur vero numquam animi eos itaque rerum illo sed aliquam doloremque vitae quae, repellat iure. Ad dolores in beatae rem aspernatur perspiciatis laborum dolorum nulla accusantium delectus non est hic libero nihil aliquam, architecto ex pariatur fuga aut officiis ab! Iure, delectus quae consequuntur quisquam, maiores reprehenderit libero quaerat deleniti saepe tenetur esse eaque at perspiciatis earum quidem mollitia reiciendis vitae. Assumenda eaque quod consequuntur, debitis incidunt cum possimus placeat quo modi aut.</p>
                <h3>Подготовка поверхности</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, in id iusto nostrum hic eveniet amet ea, voluptate, nisi ipsa veritatis nam nesciunt iure sit alias. Aliquam, assumenda quae suscipit mollitia porro dicta, doloremque consectetur cupiditate asperiores saepe tempora vel quidem libero neque? Assumenda ipsa aliquid omnis fugiat, perspiciatis dignissimos ad voluptas nisi possimus necessitatibus hic et temporibus suscipit eum animi earum neque impedit sit quaerat ex sunt obcaecati expedita, sapiente modi. Iusto nemo beatae rem? Nam quaerat eos natus harum nobis quas, eligendi ut tenetur porro quod enim exercitationem aliquam ratione quidem dolorem aut at nihil quam adipisci? Libero?</p>
                <h3>Нанесение</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio suscipit consequuntur nulla modi ex iusto numquam iste perferendis totam. Dolore, beatae magnam? Quidem commodi deserunt rem pariatur odio quas dicta ea modi atque nisi aut ad ullam placeat similique tenetur dolorem, harum quod maxime repudiandae ut ab cum quasi earum! Temporibus cupiditate enim velit molestiae quae maiores, cumque officia ipsam sint. Quibusdam cumque voluptate facilis in possimus odio, fuga ipsum rem error officia. Praesentium cupiditate magnam dolorum inventore ab nisi totam minima blanditiis quaerat, corporis aperiam temporibus rerum rem expedita qui incidunt commodi repellat cum reprehenderit eaque deleniti culpa ea.</p>
                <h3>Условия нанесения</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, alias aperiam. Dolore voluptate rerum nulla, minima maxime beatae enim consequuntur culpa sequi ex delectus esse possimus ipsum, accusamus dolor molestias.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, alias aperiam. Dolore voluptate rerum nulla, minima maxime beatae enim consequuntur culpa sequi ex delectus esse possimus ipsum, accusamus dolor molestias.</p>
            </div>
            <div class="tab__item tab__chars">
                <table>
                    <tr>
                        <td>Бренд:</td>
                        <td>BRAND NAME</td>
                    </tr>
                    <tr>
                        <td>Артикул:</td>
                        <td>AXL-12345</td>
                    </tr>
                    <tr>
                        <td>Глянец:</td>
                        <td>Полуматовая</td>
                    </tr>
                    <tr>
                        <td>Время высыхания:</td>
                        <td>3 часа</td>
                    </tr>
                    <tr>
                        <td>Плотность:</td>
                        <td>около 1,3 г/мл</td>
                    </tr>
                    <tr>
                        <td>Бренд:</td>
                        <td>BRAND NAME</td>
                    </tr>
                    <tr>
                        <td>Артикул:</td>
                        <td>AXL-12345</td>
                    </tr>
                    <tr>
                        <td>Глянец:</td>
                        <td>Полуматовая</td>
                    </tr>
                    <tr>
                        <td>Время высыхания:</td>
                        <td>3 часа</td>
                    </tr>
                    <tr>
                        <td>Плотность:</td>
                        <td>около 1,3 г/мл</td>
                    </tr>
                </table>
            </div>
            <div class="tab__item tab__docs">
                <h3>Технические спецификации</h3>
                <p>
                    <a href="#">ru_1350_7.pdf</a>
                    <span>(8,3&nbsp;Мб)</span>
                    <a href="#">Скачать</a>
                </p>
                <p>
                    <a href="#">ru_1350_7.pdf</a>
                    <span>(8,3&nbsp;Мб)</span>
                    <a href="#">Скачать</a>
                </p>
                <h3>Паспорта безопасности</h3>
                <p>
                    <a href="#">FUTURA 15_1350_EU_ru_18579.pdf</a>
                    <span>(8,3&nbsp;Мб)</span>
                    <a href="#">Скачать</a>
                </p>
                <h3>Карта цветов</h3>
                <p>
                    <a href="#">Карта цветов для интерьеров</a>
                    <span>(8,3&nbsp;Мб)</span>
                    <a href="#">Скачать</a>
                </p>
            </div>
        </div>
    </div>
</form>