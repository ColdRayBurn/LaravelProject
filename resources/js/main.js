function toggleTheme() {
    document.body.classList.toggle('dark-theme');
    updateHeaderBackground();
}
function updateHeaderBackground() {
    const header = document.querySelector('.header-container');
    const isDarkTheme = document.body.classList.contains('dark-theme');
    if (window.scrollY > 0) {
        if (isDarkTheme) {
            header.classList.add('dark-scroll');
            header.classList.remove('light-scroll');
        } else {
            header.classList.add('light-scroll');
            header.classList.remove('dark-scroll');
        }
    } else {
        header.classList.remove('dark-scroll');
        header.classList.remove('light-scroll');
    }
}

function initializeSwiper() {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        mousewheel: {
            enabled: false,
            releaseOnEdges: true,
        },
        forceToAxis: true,
    });
}

document.addEventListener('DOMContentLoaded', () => {
    updateHeaderBackground();
    initializeSwiper();
    window.addEventListener('scroll', updateHeaderBackground);
});

