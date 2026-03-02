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
            <h1 data-aos="fade-down">Политика конфиденциальности</h1>

            <div class="legal-content">
                <p data-aos="fade-up">
                    Политика конфиденциальности распространяется на персональные данные,
                    предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                    услуг по консалтингу, так и для других взаимодействий в электронном
                    формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                    техническую поддержку и информационное сопровождение.
                </p>

                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                    в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                    положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                    собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                    конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                    на их обработку способами, предусмотренными настоящей Политикой.
                </p>

                <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                    пользователя и исключительно для предоставления качественных услуг: доступа к платформе,
                    участия в стратегических сессиях, получения аналитических отчетов и внедрения инноваций. Для
                    предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования.
                </p>

                <p data-aos="fade-up">
                    Максимальный срок хранения персональных данных составляет 75
                    лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                    завершения своей деятельности или до момента официального отзыва согласия пользователем.
                </p>

                <p data-aos="fade-up">
                    Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                    их дальнейшей обработки, если цель сбора была достигнута или по запросу клиента.
                </p>

                <h2 data-aos="fade-up">Техническая информация:</h2>
                <ul data-aos="fade-up">
                    <li>Время доступа и IP-адрес;</li>
                    <li>Источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                    <li>Интернет-страницы, посещаемые пользователем;</li>
                    <li>Просмотры информационных и рекламных блоков;</li>
                    <li>Иная техническая информация, предоставляемая браузером;</li>
                    <li>Номер телефона (в случае звонка по контактам, указанным на сайте).</li>
                </ul>

                <p data-aos="fade-up">
                    При регистрации или заполнении форм обратной связи мы собираем информацию, 
                    необходимую для аутентификации и персонализации услуг:
                </p>
                <ul data-aos="fade-up">
                    <li>Имя пользователя;</li>
                    <li>E-mail и номер телефона для оперативной связи;</li>
                </ul>

                <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
                <ul data-aos="fade-up">
                    <li>Информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                    <li>Данные о запросах, отправленных через формы на сайте;</li>
                    <li>Сведения о полученных консультациях и пройденных программах;</li>
                    <li>Произведенные платежи и иная финансовая информация в рамках законодательства ЕС.</li>
                </ul>

                <h2 data-aos="fade-up">Цели обработки:</h2>
                <ul data-aos="fade-up">
                    <li>Предоставление консалтинговых услуг и доступа к аналитической платформе;</li>
                    <li>Учет пожеланий при разработке новых технологических решений;</li>
                    <li>Информирование об акциях и новых материалах через e-mail;</li>
                    <li>Обеспечение качественной экспертной поддержки.</li>
                </ul>

                <h2 data-aos="fade-up">Передача данных</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением случаев
                    получения прямого согласия, требования компетентных органов Германии или ситуации слияния компании.
                </p>

                <h2 data-aos="fade-up">Использование файлов cookie</h2>
                <p data-aos="fade-up">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Германия), 
                    чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете в любое время отключить Cookies в настройках своего браузера.
                </p>

                <h2 data-aos="fade-up">Права пользователя</h2>
                <p data-aos="fade-up">
                    Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                    пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                    <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a> или по телефону 
                    <a href="tel:+390697615583" class="text-green">+390697615583</a>.
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-in">
                <p>Последнее обновление: Март 2026</p>
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