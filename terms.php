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
            <h1 data-aos="fade-down">Условия использования</h1>

            <div class="legal-content">
                <p data-aos="fade-up">
                    Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия» или «Соглашение») представляют собой юридически
                    обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                    (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                    ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                    услуги, вы подтверждаете свое полное и безоговорочное согласие с
                    данными Условиями. Если вы не согласны, вы должны немедленно
                    прекратить использование сайта.
                </p>

                <h2 data-aos="fade-up">1. Предмет Соглашения</h2>
                <p data-aos="fade-up">
                    Компания предоставляет Пользователю доступ к использованию сайта
                    <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                    инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                    развития на базе AI (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                    взаимодействия Пользователя с платформой.
                </p>

                <h2 data-aos="fade-up">2. Обязанности и права Пользователя</h2>
                <p data-aos="fade-up">
                    Вы обязуетесь использовать сайт исключительно в законных и личных
                    некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                    <strong>запрещается</strong>:
                </p>
                <ul data-aos="fade-up">
                    <li>
                        Публиковать, передавать или распространять любую информацию,
                        которая является незаконной, вредоносной, клеветнической или нарушает авторские права.
                    </li>
                    <li>
                        Предпринимать любые действия, которые могут нарушить нормальную
                        работу сайта или привести к перегрузке цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Использовать автоматизированные скрипты (ботов) для сбора
                        информации без нашего предварительного письменного разрешения.
                    </li>
                    <li>
                        Выдавать себя за другое лицо при регистрации на консультации или получении доступа к платформе.
                    </li>
                </ul>

                <h2 data-aos="fade-up">3. Интеллектуальная собственность</h2>
                <p data-aos="fade-up">
                    Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                    логотипы и программный код, является объектом интеллектуальной
                    собственности Компании. Вам предоставляется ограниченная
                    лицензия на доступ и использование Контента в личных целях для профессионального развития. 
                    Любое копирование или распространение Контента без письменного разрешения строго запрещено.
                </p>

                <h2 data-aos="fade-up">4. Ограничение ответственности</h2>
                <p data-aos="fade-up">
                    Услуги и материалы на сайте предоставляются по принципу «как есть» (as is). Мы не даем гарантий, 
                    что сайт будет работать бесперебойно или что его контент является абсолютно точным в контексте 
                    динамически меняющегося рынка технологий в Германии и странах ЕС.
                </p>
                <p data-aos="fade-up">
                    Компания не несет ответственности за любые прямые или косвенные
                    убытки, возникшие в результате использования или невозможности использования платформы <strong><?= $domainTitle ?></strong>.
                </p>

                <h2 data-aos="fade-up">5. Изменения в Условиях</h2>
                <p data-aos="fade-up">
                    Мы оставляем за собой право в любое время изменять настоящие Условия. 
                    Все изменения вступают в силу с момента их публикации на этой странице. 
                    Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> означает ваше автоматическое согласие с новой редакцией.
                </p>

                <h2 data-aos="fade-up">6. Разрешение споров</h2>
                <p data-aos="fade-up">
                    Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                    В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                    с действующим законодательством по месту регистрации Компании в <strong>Германии</strong>.
                </p>

                <h2 data-aos="fade-up">7. Контактная информация</h2>
                <p data-aos="fade-up">
                    Если у вас возникли вопросы, связанные с настоящими Условиями,
                    пожалуйста, свяжитесь с нами:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+390697615583" class="text-green">+390697615583</a><br>
                    <strong>Адрес:</strong> Friedrichstraße 121, 10117 Berlin, Germany
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-in">
                <p>Последнее обновление: Март 2026 года</p>
            </div>
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