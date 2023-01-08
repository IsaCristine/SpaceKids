const primaryNav = document.querySelector('.primary-navigation');
const navToggle = document.querySelector('.nav-toggle');
const admContainer = document.querySelector('.adm-container');
const logo = document.querySelector('.logo-container');
navToggle.addEventListener('click', () => {
    const visibility = primaryNav.getAttribute('data-visible');
    if (visibility === 'false') {
        primaryNav.setAttribute('data-visible', 'true');
        navToggle.setAttribute('aria-expanded', 'true');
        admContainer.setAttribute('data-nav-visible', 'true');
        logo.setAttribute('data-nav-visible', 'true');

    } else {
        primaryNav.setAttribute('data-visible', 'false');
        navToggle.setAttribute('aria-expanded', 'false');
        admContainer.setAttribute('data-nav-visible', 'false');
        logo.setAttribute('data-nav-visible', 'false');
    }
})
