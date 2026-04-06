document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const themeMain = document.getElementById('theme-main');
    const themeTablet = document.getElementById('theme-tablet');
    const themeMobile = document.getElementById('theme-mobile');

    function applyTheme(theme) {
        if (!themeMain || !themeTablet || !themeMobile || !themeIcon) return;

        if (theme === 'dark') {
            themeMain.href = 'css/darkMode.css';
            themeTablet.href = 'css/darkModeTablet.css';
            themeMobile.href = 'css/darkModeMovil.css';
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            themeMain.href = 'css/lightMode.css';
            themeTablet.href = 'css/lightModeTablet.css';
            themeMobile.href = 'css/lightModeMovil.css';
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', (e) => {
            e.preventDefault();
            try {
                const currentTheme = localStorage.getItem('theme') || 'light';
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                localStorage.setItem('theme', newTheme);
                applyTheme(newTheme);
            } catch (error) {
                console.error("Error al acceder a localStorage:", error);
                const isDark = themeMain && themeMain.href.includes('darkMode');
                applyTheme(isDark ? 'light' : 'dark');
            }
        });
    }

    function handleButtonPosition() {
        const footer = document.querySelector('.footer');
        if (!themeToggle || !footer) return;

        const footerRect = footer.getBoundingClientRect();
        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
        const buttonMargin = 20;

        if (footerRect.top < viewportHeight) {
            const offset = (viewportHeight - footerRect.top) + buttonMargin;
            themeToggle.style.bottom = `${offset}px`;
            themeToggle.style.position = 'fixed';
        } else {
            themeToggle.style.bottom = `${buttonMargin}px`;
        }
    }

    window.addEventListener('scroll', handleButtonPosition);
    window.addEventListener('resize', handleButtonPosition);
    handleButtonPosition();

    try {
        const savedTheme = localStorage.getItem('theme') || 'light';
        applyTheme(savedTheme);
    } catch (e) {
        applyTheme('light');
    }

    // Lógica del Banner (Carrusel)
    function initBanner() {
        const banner = document.querySelector('.banner');
        if (!banner) return;

        const slides = banner.querySelector('.slides');
        const slideList = banner.querySelectorAll('.slide');
        const puntos = banner.querySelectorAll('.punto');
        const flechaIzq = banner.querySelectorAll('.flecha.izquierda');
        const flechaDer = banner.querySelectorAll('.flecha.derecha');
        
        let currentIndex = 0;
        let isPaused = false;
        let bannerInterval;

        function updateBanner(index) {
          currentIndex = (index + slideList.length) % slideList.length;
          slides.style.transform = `translateX(-${currentIndex * 100}%)`;
          
          puntos.forEach(p => p.classList.remove('active'));
          puntos[currentIndex].classList.add('active');
        }

        function nextSlide() {
          updateBanner(currentIndex + 1);
        }

        function prevSlide() {
          updateBanner(currentIndex - 1);
        }

        function startAutoPlay() {
          if (bannerInterval) clearInterval(bannerInterval);
          bannerInterval = setInterval(() => {
            if (!isPaused) nextSlide();
          }, 5000);
        }

        // Navegación manual flechas
        flechaIzq.forEach(f => f.addEventListener('click', () => {
          prevSlide();
          startAutoPlay(); // Reiniciar contador
        }));
        
        flechaDer.forEach(f => f.addEventListener('click', () => {
          nextSlide();
          startAutoPlay(); // Reiniciar contador
        }));

        // Navegación manual puntos
        puntos.forEach(p => p.addEventListener('click', () => {
          const index = parseInt(p.getAttribute('data-index'));
          updateBanner(index);
          startAutoPlay(); // Reiniciar contador
        }));

        // Pausa al pasar el ratón
        banner.addEventListener('mouseenter', () => isPaused = true);
        banner.addEventListener('mouseleave', () => isPaused = false);

        startAutoPlay();
    }

    initBanner();
});
