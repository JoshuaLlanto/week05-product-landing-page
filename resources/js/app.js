document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('[data-menu-button]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    const mobileLinks = document.querySelectorAll('[data-mobile-link]');

    if (!menuButton || !mobileMenu) {
        return;
    }

    const closeMenu = () => {
        menuButton.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.add('hidden');
    };

    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

        menuButton.setAttribute('aria-expanded', String(!isOpen));
        mobileMenu.classList.toggle('hidden', isOpen);
    });

    mobileLinks.forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
});