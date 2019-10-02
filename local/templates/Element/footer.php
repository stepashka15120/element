</main>
<footer class="footer">
    <div class="container">
        <section class="questions">
            <h2 class="questions__title">
                <b>Есть вопросы?</b>
                Мы вам перезвоним!</h2>
            <form action="post" class="questions__form">
                <input class="questions__input form__item" type="text" name="questions-name" id="questions-name">
                <label class="questions__label" for="questions-name">Как к вам обращаться?</label>
                <input class="questions__input form__item" type="tel" name="questions-phone" id="questions-phone">
                <label class="questions__label questions__label--phone" for="questions-phone">Ваш номер телефона</label>
                <button class="button button--dark form__item magnific-questions" type="submit" data-mfp-src=".questions-popup">Отправить</button>
            </form>
        </section>
        <section class="footer__navigation">
            <img class="footer__logo" src="<?=SITE_TEMPLATE_PATH?>/element/img/footer/logo-white.png" alt="Логотип компании" class="footer__logo">
            <ul class="footer__nav d-flex flex-wrap justify-content-around">
                <li><a href="catalog.html">Каталог</a></li>
                <li><a href="about.html">О нас</a></li>
                <li><a href="galery.html">Галерея</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="contacts.html">Контакты</a></li>
            </ul>
            <span class="footer__copy">Lorem ipsum</span>
        </section>
    </div>
</footer>

<div class="popup callback-popup mfp-hide">
    <form action="post" class="popup__form">
        <h2 class="popup__title">Заказать звонок</h2>
        <input class="popup__input" type="text" name="callback-name" id="callback-name" required>
        <label class="popup__label" for="callback-name">Как к вам обращаться?</label>
        <input class="popup__input" type="tel" name="callback-phone" id="callback-phone" required>
        <label class="popup__label popup__label--phone" for="callback-phone">Ваш номер телефона</label>
        <button class="button-link popup__submit" type="submit">Отправить</button>
    </form>
</div>

<div class="popup questions-popup mfp-hide">
    <h2 class="popup__title">Готово!</h2>
    <p>Совсем скоро наш менеджер свяжется с вами и ответит на все ваши вопросы.</p>
</div>

<?use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/element/js/jquery-3.4.1.slim.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/element/js/slick.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/element/js/jquery.magnific-popup.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/element/js/index.js");
?>
</body>
</html>
