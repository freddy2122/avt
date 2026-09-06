/* Menu mobile + sous-menu « Compétences » */
(function () {
    var burger = document.getElementById('burger');
    var nav = document.getElementById('nav');
    var subItems = document.querySelectorAll('.nav-item');
    var mobileQuery = window.matchMedia('(max-width: 1023px)');

    function closeMenu() {
        if (!nav) return;
        nav.classList.remove('is-open');
        if (burger) {
            burger.classList.remove('is-active');
            burger.setAttribute('aria-expanded', 'false');
            burger.setAttribute('aria-label', 'Ouvrir le menu');
        }
    }

    function closeSubmenus() {
        Array.prototype.forEach.call(subItems, function (item) {
            item.classList.remove('is-open');
            var toggle = item.querySelector('.nav-toggle');
            if (toggle) toggle.setAttribute('aria-expanded', 'false');
        });
    }

    if (burger && nav) {
        burger.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            burger.classList.toggle('is-active', open);
            burger.setAttribute('aria-expanded', String(open));
            burger.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
        });
    }

    Array.prototype.forEach.call(subItems, function (item) {
        var toggle = item.querySelector('.nav-toggle');
        if (!toggle) return;

        toggle.addEventListener('click', function (event) {
            event.preventDefault();
            var open = !item.classList.contains('is-open');
            closeSubmenus();
            item.classList.toggle('is-open', open);
            toggle.setAttribute('aria-expanded', String(open));
        });
    });

    document.addEventListener('click', function (event) {
        if (nav && !nav.contains(event.target) && (!burger || !burger.contains(event.target))) {
            closeSubmenus();
            if (mobileQuery.matches) closeMenu();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key !== 'Escape') return;
        closeSubmenus();
        closeMenu();
    });

    Array.prototype.forEach.call(nav ? nav.querySelectorAll('a') : [], function (link) {
        link.addEventListener('click', function () {
            if (mobileQuery.matches) closeMenu();
        });
    });

    mobileQuery.addEventListener('change', function (event) {
        if (!event.matches) {
            closeMenu();
            closeSubmenus();
        }
    });
})();
