document.addEventListener('DOMContentLoaded', () => {
    // 1. ИНИЦИАЛИЗАЦИЯ
    lucide.createIcons();
    AOS.init({ duration: 1000, once: true });

    // 2. МОБИЛЬНОЕ МЕНЮ (Anime.js)
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    let isMenuOpen = false;

    const toggleMenu = () => {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            mobileMenu.style.right = '0';
            anime({
                targets: '.mobile-menu',
                translateX: ['100%', '0%'],
                easing: 'easeOutExpo',
                duration: 600
            });
            anime({
                targets: '.mobile-link',
                opacity: [0, 1],
                translateY: [20, 0],
                delay: anime.stagger(100, {start: 300}),
                easing: 'easeOutQuad'
            });
        } else {
            anime({
                targets: '.mobile-menu',
                translateX: '100%',
                easing: 'easeInExpo',
                duration: 500,
                complete: () => { mobileMenu.style.right = '-100%'; }
            });
        }
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. ВАЛИДАЦИЯ ТЕЛЕФОНА (Только цифры)
    const phoneInput = document.getElementById('phone-input');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^\d+]/g, '');
    });

    // 4. МАТЕМАТИЧЕСКАЯ КАПЧА
    const captchaLabel = document.getElementById('captcha-label');
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    const correctAnswer = num1 + num2;
    captchaLabel.innerText = `Сколько будет ${num1} + ${num2}?`;

    // 5. ОТПРАВКА ФОРМЫ (AJAX имитация)
    const form = document.getElementById('ai-form');
    const successMsg = document.getElementById('form-success');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const userAnswer = parseInt(document.getElementById('captcha-input').value);

        if (userAnswer !== correctAnswer) {
            alert('Ошибка в капче! Попробуйте еще раз.');
            return;
        }

        // Имитация AJAX
        const btn = form.querySelector('button');
        btn.innerText = 'Отправка...';
        btn.style.opacity = '0.7';

        setTimeout(() => {
            btn.style.display = 'none';
            successMsg.style.display = 'flex';
            anime({
                targets: '#form-success',
                scale: [0.8, 1],
                opacity: [0, 1],
                duration: 500,
                easing: 'easeOutBack'
            });
            form.reset();
        }, 1500);
    });

    // 6. COOKIE POPUP (LocalStorage)
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            anime({
                targets: '#cookie-popup',
                bottom: ['-100px', '30px'],
                duration: 1000,
                easing: 'easeOutExpo'
            });
        }, 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        anime({
            targets: '#cookie-popup',
            bottom: '-100px',
            opacity: 0,
            duration: 500,
            easing: 'easeInQuad'
        });
    });

    // 7. HERO ANIMATIONS (Anime.js из прошлых этапов)
    anime({
        targets: '.sphere-ring',
        rotate: '1turn',
        borderRadius: ['40% 60% 70% 30% / 40% 50% 60% 50%', '50% 50% 50% 50%'],
        duration: 10000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });
});