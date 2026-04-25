document.addEventListener('DOMContentLoaded', () => {
  const themeToggle = document.getElementById('theme-toggle');
  const themeIcon = document.getElementById('theme-icon');
  const themeMain = document.getElementById('theme-main');
  const themeTablet = document.getElementById('theme-tablet');
  const themeMobile = document.getElementById('theme-mobile');

  function applyTheme(theme) {
    if (!themeMain || !themeTablet || !themeMobile || !themeIcon) return;
    const isDark = (theme === 'dark');

    const updateHref = (element, lightFile, darkFile) => {
      if (!element) return;
      const currentHref = element.href;
      if (isDark) {
        element.href = currentHref.replace(lightFile, darkFile);
      } else {
        element.href = currentHref.replace(darkFile, lightFile);
      }
    };

    updateHref(themeMain, 'lightMode.css', 'darkMode.css');
    updateHref(themeTablet, 'lightModeTablet.css', 'darkModeTablet.css');
    updateHref(themeMobile, 'lightModeMovil.css', 'darkModeMovil.css');

    if (isDark) {
      themeIcon.classList.remove('fa-moon');
      themeIcon.classList.add('fa-sun');
    } else {
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

  const banner = document.querySelector('.banner');
  if (banner) {
    const slides = banner.querySelector('.slides');
    const slideList = banner.querySelectorAll('.slide');
    const puntos = banner.querySelectorAll('.punto');
    const flechas = banner.querySelectorAll('.flecha');
    let currentIndex = 0;
    let bannerInterval;

    function updateBanner(index) {
      currentIndex = (index + slideList.length) % slideList.length;
      slides.style.transform = `translateX(-${currentIndex * 100}%)`;
      puntos.forEach((p, i) => p.classList.toggle('active', i === currentIndex));
    }

    function startAutoPlay() {
      if (bannerInterval) clearInterval(bannerInterval);
      bannerInterval = setInterval(() => updateBanner(currentIndex + 1), 5000);
    }

    flechas.forEach(f => f.addEventListener('click', () => {
      updateBanner(currentIndex + (f.classList.contains('izquierda') ? -1 : 1));
      startAutoPlay();
    }));

    puntos.forEach((p, i) => p.addEventListener('click', () => {
      updateBanner(i);
      startAutoPlay();
    }));

    startAutoPlay();
  }
});
