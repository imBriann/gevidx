let lastScrollTop = 0;
const navbar = document.querySelector('.barra-nav');
const hideThreshold = 250; // Posición mínima para empezar a ocultar

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > hideThreshold) { 
        if (currentScroll > lastScrollTop) {
            // Scroll hacia abajo: ocultar barra
            navbar.classList.add('hidden');
        } else {
            // Scroll hacia arriba: mostrar barra
            navbar.classList.remove('hidden');
        }
    } else {
        // Mostrar barra si el scroll es menor al umbral
        navbar.classList.remove('hidden');
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Evitar valores negativos
});

function toggleMenu() {
    const navMenu = document.getElementById('navMenu');
    navMenu.classList.toggle('active');
}

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        const navMenu = document.getElementById('navMenu');
        navMenu.classList.remove('active');
    });
});


