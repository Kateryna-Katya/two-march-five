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
});