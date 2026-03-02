<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Практики ИИ для жизни
    </title>

<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='14' fill='none' stroke='%2300ff88' stroke-width='2'/%3E%3Ccircle cx='16' cy='8' r='3' fill='%23ff8c00'/%3E%3Ccircle cx='16' cy='24' r='3' fill='%23ff8c00'/%3E%3Ccircle cx='8' cy='16' r='3' fill='%23ff8c00'/%3E%3Ccircle cx='24' cy='16' r='3' fill='%23ff8c00'/%3E%3Cpath d='M16 11 L16 21 M11 16 L21 16' stroke='%2300ff88' stroke-width='1.5' stroke-linecap='round'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#home" class="logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>

                <ul class="menu">
                    <li><a href="./#practices" class="menu__link">Практики</a></li>
                    <li><a href="./#tools" class="menu__link">Инструменты</a></li>
                    <li><a href="./#learning" class="menu__link">Обучение</a></li>
                    <li><a href="./#cases" class="menu__link">Кейсы</a></li>
                </ul>

                <div class="header__actions">
                    <a href="./#contact" class="btn btn--outline">Связаться</a>
                    <button class="burger" aria-label="Menu">
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-down">Политика использования файлов cookie</h1>

            <p data-aos="fade-up">
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашим сайтом, обеспечить его корректную работу и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей и как вы можете ими
                управлять в рамках законодательства ЕС.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных (текстовый файл),
                который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                или смартфоне), когда вы его посещаете. Это позволяет платформе 
                <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, логин, язык, настройки региона Германия и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их 
                повторно при каждом визите.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                    критически важны для функционирования сайта. Они позволяют вам
                    перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности. 
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Эти файлы собирают анонимную информацию о том, как посетители
                    используют наш сайт, помогая нам улучшать контент и внедрять ИИ-практики.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                    сайту запоминать ваш выбор для предоставления более
                    персонализированного опыта в рамках наших сервисов.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                    используются для доставки объявлений, соответствующих вашим интересам.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Обеспечение стабильной и безопасной работы платформы.</li>
                <li>Анализ пользовательского поведения для оптимизации структуры сайта.</li>
                <li>Персонализация контента и настроек для удобства пользователей в Европе.</li>
                <li>Предоставление релевантных маркетинговых и рекламных материалов.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над файлами cookie. Вы можете в любой
                момент изменить свои настройки в браузере. Однако, обратите
                внимание: отключение строго необходимых cookie может привести к
                некорректной работе некоторых интерактивных функций нашего сайта.
            </p>

            <h2 data-aos="fade-up">Обновления политики</h2>
            <p data-aos="fade-up">
                Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях или
                законодательстве. Продолжение использования сайта <strong><?= $fullDomain ?></strong> будет означать ваше согласие с обновленными условиями.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно политики использования файлов cookie на 
                <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a><br>
                <strong>Телефон:</strong> <a href="tel:+390697615583" class="text-green">+390697615583</a><br>
                <strong>Адрес:</strong> Friedrichstraße 121, 10117 Berlin, Germany
            </p>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#home" class="logo logo--footer">
                        <span class="logo__dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__text">
                        Технологии, которые работают на вас. Расширяем горизонты использования ИИ в повседневной жизни.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#practices">Практики</a></li>
                        <li><a href="./#tools">Инструменты</a></li>
                        <li><a href="./#learning">Обучение</a></li>
                        <li><a href="./#cases">Кейсы</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+493098765432">+49 30 9876 5432</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Friedrichstraße 121, 10117 Berlin, Germany</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                    <?= date('Y') ?>
                    <?= $domainTitle ?>. Платформа уже доступна в Европе.
                </p>
            </div>
        </div>
    </footer>
<div class="mobile-menu">
    <div class="mobile-menu__inner">
        <ul class="mobile-menu__list">
            <li><a href="./#practices" class="mobile-link">Практики</a></li>
            <li><a href="./#tools" class="mobile-link">Инструменты</a></li>
            <li><a href="./#learning" class="mobile-link">Обучение</a></li>
            <li><a href="./#cases" class="mobile-link">Кейсы</a></li>
            <li><a href="./#contact" class="mobile-link btn btn--primary">Начать сейчас</a></li>
        </ul>
    </div>
</div>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--primary btn--sm">Принять</button>
    </div>
</div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="script.js"></script>
</body>

</html>