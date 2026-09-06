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

/* Carrousel des accompagnements : défilement par « page » de cartes visibles */
(function () {
    document.querySelectorAll('[data-carousel]').forEach(function (carousel) {
        var track = carousel.querySelector('[data-carousel-track]');
        var prev = carousel.querySelector('[data-carousel-prev]');
        var next = carousel.querySelector('[data-carousel-next]');

        if (!track) return;

        function step() {
            var card = track.firstElementChild;
            if (!card) return track.clientWidth;

            var styles = window.getComputedStyle(track);
            var gap = parseFloat(styles.columnGap || styles.gap) || 0;

            return card.getBoundingClientRect().width + gap;
        }

        function refresh() {
            var maxScroll = track.scrollWidth - track.clientWidth - 1;
            if (prev) prev.disabled = track.scrollLeft <= 0;
            if (next) next.disabled = track.scrollLeft >= maxScroll;
            [prev, next].forEach(function (button) {
                if (button) button.classList.toggle('opacity-30', button.disabled);
            });
        }

        if (prev) prev.addEventListener('click', function () { track.scrollBy({ left: -step(), behavior: 'smooth' }); });
        if (next) next.addEventListener('click', function () { track.scrollBy({ left: step(), behavior: 'smooth' }); });

        track.addEventListener('scroll', refresh, { passive: true });
        window.addEventListener('resize', refresh);
        refresh();
    });
})();
