/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    //  Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    const formatCountValue = (value, format) => {
        const rounded = Math.round(value);
        if (format === 'comma') {
            return rounded.toLocaleString('en-US');
        }
        return String(rounded);
    };

    const animateCountUp = (el) => {
        if (!el || el.dataset.countStarted === 'true') {
            return;
        }

        const target = Number(el.dataset.countTarget);
        if (!Number.isFinite(target)) {
            return;
        }

        el.dataset.countStarted = 'true';

        const suffix = el.dataset.countSuffix || '';
        const format = el.dataset.countFormat || '';
        const duration = Number(el.dataset.countDuration || 900);
        const startTime = performance.now();

        const tick = (now) => {
            const elapsed = now - startTime;
            const t = Math.min(1, elapsed / duration);
            const eased = 1 - Math.pow(1 - t, 3);
            const current = target * eased;

            el.textContent = `${formatCountValue(current, format)}${suffix}`;

            if (t < 1) {
                requestAnimationFrame(tick);
            } else {
                el.textContent = `${formatCountValue(target, format)}${suffix}`;
            }
        };

        requestAnimationFrame(tick);
    };

    const countEls = document.querySelectorAll('[data-count-target]');
    countEls.forEach((el) => animateCountUp(el));
});
