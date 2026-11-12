// Abre y cierra el menú lateral en pantallas pequeñas.
const menuButton = document.getElementById('menuToggle');
const sidebar = document.getElementById('sidebar');

if (menuButton && sidebar) {
    menuButton.addEventListener('click', () => {
        const isOpen = sidebar.classList.toggle('sidebar-open');
        menuButton.setAttribute('aria-expanded', isOpen);
    });

    document.addEventListener('click', (event) => {
        const isMobile = window.innerWidth <= 760;
        const clickedOutside = !sidebar.contains(event.target)
            && !menuButton.contains(event.target);

        if (isMobile && sidebar.classList.contains('sidebar-open') && clickedOutside) {
            sidebar.classList.remove('sidebar-open');
            menuButton.setAttribute('aria-expanded', 'false');
        }
    });
}
