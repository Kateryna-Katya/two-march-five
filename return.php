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
            <h1 data-aos="fade-down">Политика возврата средств</h1>
            
            <div class="legal-content">
                <h2 data-aos="fade-up">Условия для оформления возврата</h2>
                <p data-aos="fade-up">
                    Вы можете претендовать на полный или частичный возврат средств в
                    следующих ситуациях:
                </p>
                <ul data-aos="fade-up">
                    <li>
                        <strong>Несоответствие программы описанию:</strong> Если содержание
                        предоставленной консультации или экспертного материала существенно отличается от программы,
                        заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                    </li>
                    <li>
                        <strong>Технические неисправности с нашей стороны:</strong> При
                        возникновении критических технических проблем на платформе
                        <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были
                        устранены нашей командой в разумные сроки.
                    </li>
                    <li>
                        <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                        решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                        дней с момента оплаты, при условии, что вы еще не получили доступ
                        к значительному объему материалов.
                    </li>
                </ul>

                <h2 data-aos="fade-up">Процедура запроса на возврат</h2>
                <p data-aos="fade-up">
                    Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                    следующие шаги:
                </p>
                <ol class="custom-list" data-aos="fade-up">
                    <li>
                        Составьте письмо и отправьте его на наш официальный email:
                        <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a>.
                    </li>
                    <li>
                        В теме письма обязательно укажите: <strong>«Запрос на возврат средств»</strong>.
                    </li>
                    <li>
                        В теле письма предоставьте полную информацию: ваше имя и фамилию,
                        email, который использовался при регистрации, и точное название выбранной программы.
                    </li>
                    <li>
                        Подробно опишите причину, по которой вы запрашиваете
                        возврат, со ссылкой на один из пунктов наших условий.
                    </li>
                    <li>
                        Наша служба поддержки рассмотрит ваш запрос и свяжется с вами в течение 3-х рабочих дней.
                    </li>
                </ol>

                <h2 data-aos="fade-up">Сроки и способ возврата</h2>
                <p data-aos="fade-up">
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение 7–14 рабочих дней. Средства будут возвращены
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента работы вашего банка или платежной системы в <strong>Германии</strong> или стране вашего пребывания.
                </p>

                <h2 data-aos="fade-up">Исключения и ограничения</h2>
                <p data-aos="fade-up">Возврат средств не может быть осуществлен, если:</p>
                <ul data-aos="fade-up">
                    <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                    <li>Вы уже изучили или скачали более 50% материалов программы.</li>
                    <li>Причиной являются технические проблемы на стороне пользователя (ПО, соединение).</li>
                    <li>Были нарушены условия Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
                </ul>

                <h2 data-aos="fade-up">Изменения в политике</h2>
                <p data-aos="fade-up">
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                    Политику. Актуальная версия всегда доступна на этой
                    странице <strong><?= $fullDomain ?></strong>.
                </p>

                <h2 data-aos="fade-up">Свяжитесь с нами</h2>
                <p data-aos="fade-up">
                    По всем вопросам, связанным с возвратом средств, пожалуйста, обращайтесь в службу поддержки:
                    <br><br>
                    <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>" class="text-green">support@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+390697615583" class="text-green">+390697615583</a>
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