# Site vitrine — Maître Daniela DIDONNO, Avocate

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
resources/views/partials/competences-bar.blade.php  Bandeau des compétences (coupe en biais)
resources/views/partials/a-propos.blade.php         Section « Votre cabinet d'avocate »
resources/views/partials/droit-affaires.blade.php   Section « Qu'est-ce que le droit des affaires ? »
resources/views/partials/expertises.blade.php       Section « Mes compétences » (cartes sombres)
resources/views/partials/pourquoi.blade.php         Bandeau « Pourquoi choisir … ? »
resources/views/partials/accompagnements.blade.php  Carrousel des accompagnements
resources/views/partials/cabinet-digital.blade.php  Section « Cabinet digitalisé et en présentiel »
resources/views/partials/avis.blade.php             Avis clients (carrousel Google)
resources/views/partials/faq.blade.php              Questions fréquentes (accordéon <details>)
resources/views/partials/rendez-vous.blade.php      Prise de rendez-vous et coordonnées
resources/views/partials/footer.blade.php           Pied de page (inclus dans le layout)
resources/views/components/icon.blade.php           Pictogrammes SVG (<x-icon name="…" />)
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
| `public/images/a-propos.jpg`     | Photo de la section « cabinet » | JPG/WebP, cadrage carré              |
| `public/images/droit-affaires.jpg` | Illustration « droit des affaires » | JPG/WebP, format 4/3           |
| `public/images/competences.jpg`  | Photo de la section « Mes compétences » | JPG/WebP, cadrage carré     |
| `public/images/cabinet-digital.png` | Mockup du site sur ordinateur | PNG/WebP transparent, paysage   |
| `public/images/rendez-vous.png`  | Mockup + tour Eiffel          | PNG/WebP transparent, paysage          |

Le portrait a deux traitements automatiques :

- **`avocate.png`** (fond transparent) → affiché tel quel, comme sur le modèle ;
- **`avocate.jpg` / `.webp`** (photo de studio avec son décor) → présenté dans un
  cadre arrondi en arche, bordé de crème : élégant sans nécessiter de détourage.

Le logo « DD / AVOCATE » est composé en HTML (texte), aucune image n'est nécessaire.

> **Droits d'utilisation** : une URL de prévisualisation iStock (`media.istockphoto.com`,
> paramètre `s=612x612`) est une image de comparaison filigranée, réservée à la maquette.
> Pour la mise en ligne, téléchargez le fichier haute définition depuis la licence achetée.

## Identité du cabinet

Le nom, les initiales du logo, le titre et l'accroche sont regroupés dans
`config/cabinet.php` — un seul fichier à modifier, aucune vue à toucher :

```php
'nom'       => 'Maître Daniela DIDONNO',
'initiales' => 'DD',
'mention'   => 'Avocate',
'titre'     => 'Avocate en droit des affaires à Paris',
'accroche'  => 'Cabinet physique et digitalisé dans toute la France',
```

Le même fichier porte tout le contenu éditorial de la page d'accueil :
`expertises` (sous-menu du header **et** cartes « Mes compétences »),
`atouts` (« Pourquoi choisir … ? »), `accompagnements` (carrousel),
`avantages_digital`, `faq`, `avis` et `contact`. Ajouter une entrée à l'un de
ces tableaux suffit à la faire apparaître sur la page.

### À renseigner avant la mise en ligne

- **`contact`** : téléphone, adresse-mail, adresse postale, horaires et
  `reservation_url` (lien Calendly, Doctrine, Izy…) sont des valeurs
  d'exemple. Les trois blocs de coordonnées et tous les boutons
  « Prendre rendez-vous » les utilisent.
- **`avis.temoignages`** : les quatre témoignages livrés sont des **exemples de
  mise en page**. Ils doivent être remplacés par les avis réellement laissés
  par les clients du cabinet, repris depuis la fiche Google — un avis attribué
  à une personne qui ne l'a pas écrit est un faux témoignage. Renseignez aussi
  `avis.nombre`, `avis.profil_url` et `avis.ecrire_url`.

Le tableau `competences` du même fichier alimente **à la fois** le sous-menu
« Compétences » du header et le bandeau sous la bannière : une entrée ajoutée
apparaît aux deux endroits. La clé `icone` renvoie à un cas du composant
`<x-icon />` (`resources/views/components/icon.blade.php`), où sont dessinés
tous les pictogrammes en SVG — aucune police d'icônes à charger.

## Contenu de la navigation

Les entrées du menu et du sous-menu « Compétences » sont des tableaux PHP en haut de
`resources/views/partials/header.blade.php` : il suffit d'y ajouter ou modifier des lignes.

## Réalisé

- Header fixe : logo, navigation, sous-menu déroulant, bouton « Prendre rendez-vous », menu burger
- Hero plein écran : image de fond + dégradé, titre, sous-titre, accroche, deux boutons, portrait
- Bandeau des compétences coupé en biais, avec pictogrammes SVG
- Section « Votre cabinet d'avocate en droit des affaires » : photo, présentation, modes de rendez-vous
- Section « Qu'est-ce que le droit des affaires ? » : présentation, cartes développement / litiges, illustration
- Section « Mes compétences » : cinq domaines dont la succession, en cartes sombres sur photo
- Bandeau « Pourquoi choisir … ? » coupé en biais : sécurité, transparence, réactivité, couverture
- Carrousel « Mes différents accompagnements » (défilement tactile + flèches)
- Section « Cabinet digitalisé et en présentiel » : mockup, avantages et bouton
- Questions fréquentes en accordéon `<details>` natif, la première ouverte
- Section « Retour d'expérience de mes clients » : fiche du cabinet et carrousel d'avis Google
- Section « Prendre rendez-vous » : horaires, bouton de réservation et bloc de coordonnées
- Pied de page : identité, navigation, coordonnées, bouton de réservation et mentions légales
- Responsive (menu burger sous 1024 px) et accessibilité de base (`aria-expanded`, fermeture avec `Échap`)
