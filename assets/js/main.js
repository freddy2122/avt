/* Menu mobile + sous-menu "Compétences" */
(function () {
  var burger = document.getElementById('burger');
  var nav = document.getElementById('nav');
  var subItems = document.querySelectorAll('.nav__item--has-sub');
  var mobileQuery = window.matchMedia('(max-width: 1024px)');

  if (burger && nav) {
    burger.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      burger.classList.toggle('is-active', open);
      burger.setAttribute('aria-expanded', String(open));
      burger.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
    });
  }

  function closeMenu() {
    if (!nav) return;
    nav.classList.remove('is-open');
    if (burger) {
      burger.classList.remove('is-active');
      burger.setAttribute('aria-expanded', 'false');
      burger.setAttribute('aria-label', 'Ouvrir le menu');
    }
  }

  Array.prototype.forEach.call(subItems, function (item) {
    var toggle = item.querySelector('.nav__toggle');
    if (!toggle) return;

    toggle.addEventListener('click', function (event) {
      event.preventDefault();
      var open = !item.classList.contains('is-open');

      Array.prototype.forEach.call(subItems, function (other) {
        other.classList.remove('is-open');
        var otherToggle = other.querySelector('.nav__toggle');
        if (otherToggle) otherToggle.setAttribute('aria-expanded', 'false');
      });

      item.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', String(open));
    });
  });

  /* Fermeture au clic extérieur / touche Échap */
  document.addEventListener('click', function (event) {
    if (nav && !nav.contains(event.target) && (!burger || !burger.contains(event.target))) {
      Array.prototype.forEach.call(subItems, function (item) {
        item.classList.remove('is-open');
        var toggle = item.querySelector('.nav__toggle');
        if (toggle) toggle.setAttribute('aria-expanded', 'false');
      });
      if (mobileQuery.matches) closeMenu();
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key !== 'Escape') return;
    Array.prototype.forEach.call(subItems, function (item) {
      item.classList.remove('is-open');
      var toggle = item.querySelector('.nav__toggle');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });
    closeMenu();
  });

  /* Fermer le menu après un clic sur un lien (mobile) */
  Array.prototype.forEach.call(nav ? nav.querySelectorAll('a') : [], function (link) {
    link.addEventListener('click', function () {
      if (mobileQuery.matches) closeMenu();
    });
  });

  /* Repasser en desktop : on nettoie les états mobiles */
  mobileQuery.addEventListener('change', function (event) {
    if (!event.matches) closeMenu();
  });
})();
