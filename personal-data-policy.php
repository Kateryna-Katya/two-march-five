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
            <h1 data-aos="fade-down">Политика касаемо обработки персональных данных</h1>

            <div class="legal-content">
                <h2 data-aos="fade-up">1. Общие положения</h2>
                <p data-aos="fade-up">
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентом GDPR.
                </p>
                <p data-aos="fade-up">
                    1.1. Важнейшей целью и условием осуществления своей деятельности
                    Оператор считает соблюдение прав и свобод человека и гражданина при
                    обработке его персональных данных, в том числе защиты прав на
                    неприкосновенность частной жизни, личную и семейную тайну.
                </p>
                <p data-aos="fade-up">
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>

                <h2 data-aos="fade-up">2. Основные понятия</h2>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и
                        информационных материалов, доступных по адресу 
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация,
                        относящаяся прямо или косвенно к Пользователю.
                    </li>
                    <li>
                        <strong>Безопасность данных</strong> — защищенность
                        персональных данных от неправомерного доступа, изменения или блокирования.
                    </li>
                </ul>

                <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
                <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Имя и фамилия;</li>
                            <li>Адрес электронной почты;</li>
                            <li>Номер телефона (валидация по стандартам Германии).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Собираемые автоматически:</strong>
                        <ul>
                            <li>
                                Обезличенные данные о посетителях (в т.ч. файлы «cookie») с помощью сервисов
                                интернет-статистики (Google Аналитика).
                            </li>
                        </ul>
                    </li>
                </ul>

                <h2 data-aos="fade-up">4. Цели обработки данных</h2>
                <ul data-aos="fade-up">
                    <li>
                        Идентификация Пользователя для предоставления доступа к практикам и инструментам ИИ.
                    </li>
                    <li>
                        Установление обратной связи, включая направление уведомлений и обработку заявок.
                    </li>
                    <li>
                        Информирование посредством электронных писем. Вы всегда можете отказаться от рассылок, 
                        направив письмо на <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a>.
                    </li>
                </ul>

                <h2 data-aos="fade-up">5. Порядок и безопасность данных</h2>
                <p data-aos="fade-up">
                    Оператор принимает все необходимые технические и организационные меры для защиты данных Пользователей платформы 
                    <strong><?= $domainTitle ?></strong> от неправомерного или случайного доступа.
                </p>
                <p data-aos="fade-up">
                    Срок обработки персональных данных является неограниченным. Пользователь может в любой момент отозвать 
                    свое согласие, направив уведомление Оператору.
                </p>

                <h2 data-aos="fade-up">6. Контактная информация</h2>
                <p data-aos="fade-up">
                    Если у вас возникли вопросы касательно обработки персональных данных на <strong><?= $domainTitle ?></strong>, 
                    пожалуйста, свяжитесь с нами:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+390697615583" class="text-green">+390697615583</a><br>
                    <strong>Адрес:</strong> Friedrichstraße 121, 10117 Berlin, Germany
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-in">
                <p>Актуальная версия Политики <strong><?= $domainTitle ?></strong> обновлена в марте 2026 года.</p>
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