# Site vitrine — Maître David Audebert, Avocat

Application **Laravel** + **Tailwind CSS via CDN**.
Aucun `node_modules`, aucun `npm install`, aucune étape de build : seul Composer est nécessaire.

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Le site est alors disponible sur http://127.0.0.1:8000.

## Structure

```
routes/web.php                          Route « / » → vue home
resources/views/layouts/app.blade.php   Layout : polices, Tailwind (CDN), palette
resources/views/partials/header.blade.php  Header : logo, navigation, sous-menu, CTA
resources/views/partials/hero.blade.php    Bannière hero
resources/views/home.blade.php          Page d'accueil
public/css/site.css                     Compléments CSS (états ouverts du menu)
public/js/main.js                       Menu mobile + sous-menu « Compétences »
public/images/                          Images (placeholders à remplacer)
```

## Tailwind sans node_modules

Tailwind est chargé par le CDN officiel dans `layouts/app.blade.php` :

```html
<script src="https://cdn.tailwindcss.com"></script>
```

La palette et les polices du cabinet sont déclarées juste en dessous, dans `tailwind.config` :

| Classe          | Couleur   | Usage                              |
|-----------------|-----------|------------------------------------|
| `brown`         | `#3f2a2a` | Barre de navigation, bouton foncé  |
| `brown-dark`    | `#33201f` | Survol du bouton foncé, fond hero  |
| `cream`         | `#eee0bd` | Boutons clairs, sous-titre du hero |
| `cream-soft`    | `#f5ecd6` | Survol des boutons clairs          |
| `font-title`    | Playfair Display | Titres                    |
| `font-body`     | Jost      | Textes et navigation               |

> Le CDN convient parfaitement au développement et à un site vitrine.
> Pour une mise en production optimisée sans Node, on peut générer une feuille de style
> figée avec le binaire autonome de Tailwind (`tailwindcss-linux-x64`, aucun `node_modules`),
> puis remplacer la balise `<script>` par un `<link>` vers le fichier généré.

## Remplacer les images

Il suffit de **déposer les fichiers dans `public/images/`** : les vues détectent
automatiquement le premier format présent (`.webp`, `.jpg`, `.jpeg`, `.png`) et
retombent sur les placeholders SVG tant que la photo n'est pas fournie
(voir `app/Support/SiteImage.php`). Aucune modification des vues n'est nécessaire.

| Fichier à déposer                | Rôle                          | Format conseillé                       |
|----------------------------------|-------------------------------|----------------------------------------|
| `public/images/hero-bg.jpg`      | Photo de fond de la bannière  | JPG/WebP ≥ 1920×1080, paysage          |
| `public/images/avocate.png`      | Portrait **détouré**          | PNG/WebP transparent, ~1200 px de haut |
| `public/images/avocate.jpg`      | Portrait **avec son décor**   | JPG/WebP, cadrage portrait 3/4         |

Le portrait a deux traitements automatiques :

- **`avocate.png`** (fond transparent) → affiché tel quel, comme sur le modèle ;
- **`avocate.jpg` / `.webp`** (photo de studio avec son décor) → présenté dans un
  cadre arrondi en arche, bordé de crème : élégant sans nécessiter de détourage.

Le logo « DA / AVOCAT » est composé en HTML (texte), aucune image n'est nécessaire.

> **Droits d'utilisation** : une URL de prévisualisation iStock (`media.istockphoto.com`,
> paramètre `s=612x612`) est une image de comparaison filigranée, réservée à la maquette.
> Pour la mise en ligne, téléchargez le fichier haute définition depuis la licence achetée.

## Contenu de la navigation

Les entrées du menu et du sous-menu « Compétences » sont des tableaux PHP en haut de
`resources/views/partials/header.blade.php` : il suffit d'y ajouter ou modifier des lignes.

## Réalisé

- Header fixe : logo, navigation, sous-menu déroulant, bouton « Prendre rendez-vous », menu burger
- Hero plein écran : image de fond + dégradé, titre, sous-titre, accroche, deux boutons, portrait détouré
- Responsive (menu burger sous 1024 px) et accessibilité de base (`aria-expanded`, fermeture avec `Échap`)
