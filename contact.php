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
            <h1 data-aos="fade-down">Контактная информация</h1>

            <p data-aos="fade-up">
                Мы всегда открыты для новых проектов и профессиональных дискуссий о будущем технологий. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong> любым удобным для вас способом. 
                Наши эксперты готовы ответить на ваши вопросы по внедрению ИИ-практик по будням с 09:00 до 18:00 (CET).
            </p>

            <div class="contact-cards">
                <div class="contact-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="contact-card__icon">
                        <i data-lucide="mail"></i>
                    </div>
                    <h2>Пишите нам</h2>
                    <p>Для общих вопросов, предложений и запросов на AI-консалтинг:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="contact-card__icon">
                        <i data-lucide="phone"></i>
                    </div>
                    <h2>Звоните</h2>
                    <p>Прямая линия экспертной поддержки и консультаций по всей Европе:</p>
                    <a href="tel:+390697615583" class="contact-link">+390697615583</a>
                </div>

                <div class="contact-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="contact-card__icon">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <h2>Наш офис</h2>
                    <p>Центральный хаб <strong><?= $domainTitle ?></strong> расположен в Германии:</p>
                    <address class="contact-address">
                        Friedrichstraße 121,<br>
                        10117 Berlin,<br>
                        Germany
                    </address>
                </div>
            </div>

            <div class="contact-extra" data-aos="fade-up">
                <p>
                    Вы также можете воспользоваться формой обратной связи на 
                    <a href="./#contact" class="text-orange">главной странице</a> для мгновенного запроса доступа к платформе.
                </p>
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