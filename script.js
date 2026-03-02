document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();

    AOS.init({
        duration: 1000,
        once: true
    });

    // --- ANIME.JS ANIMATIONS ---

    // Анимация заголовка (побуквенно или плавное появление)
    anime({
        targets: '.text-animate',
        opacity: [0, 1],
        translateY: [30, 0],
        duration: 1200,
        easing: 'easeOutExpo',
        delay: 500
    });

    // Анимация "Живой сферы" ИИ
    anime({
        targets: '.sphere-ring',
        rotate: '1turn',
        borderRadius: ['40% 60% 70% 30% / 40% 50% 60% 50%', '50% 50% 50% 50%'],
        duration: 10000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });

    anime({
        targets: '.sphere-core',
        scale: [1, 1.3],
        opacity: [0.4, 0.8],
        duration: 3000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutQuad'
    });

    // Хедер при скролле
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(10, 12, 16, 0.9)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'transparent';
        }
    });
    // Добавь это внутрь DOMContentLoaded

// Эффект парения для декоративного элемента в инструментах
anime({
    targets: '.anime-float',
    translateY: [-15, 15],
    translateX: [-10, 10],
    rotate: [0, 5],
    duration: 4000,
    direction: 'alternate',
    loop: true,
    easing: 'easeInOutQuad'
});

// Анимация иконок в карточках при наведении
const cards = document.querySelectorAll('.practice-card');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        anime({
            targets: card.querySelector('.practice-card__icon'),
            scale: 1.2,
            rotate: '15deg',
            duration: 400,
            easing: 'easeOutBack'
        });
    });
    card.addEventListener('mouseleave', () => {
        anime({
            targets: card.querySelector('.practice-card__icon'),
            scale: 1,
            rotate: '0deg',
            duration: 400,
            easing: 'easeOutBack'
        });
    });
});
    // Добавь это в конец DOMContentLoaded

// Анимация пульсации номеров шагов при скролле (Anime.js)
const stepObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            anime({
                targets: entry.target.querySelector('.step-item__num'),
                scale: [0.8, 1.1, 1],
                borderColor: ['#0a0c10', '#00ff88'],
                duration: 800,
                easing: 'easeOutBack'
            });
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.step-item').forEach(item => stepObserver.observe(item));

// Эффект появления "статистики" в кейсах
const caseCards = document.querySelectorAll('.case-card');
caseCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        anime({
            targets: card.querySelector('.case-card__stat'),
            translateX: [0, 10, 0],
            duration: 600,
            easing: 'easeInOutQuad'
        });
    });
});
});