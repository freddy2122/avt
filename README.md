# Site vitrine — Maître David Audebert, Avocat

Site statique (HTML / CSS / JavaScript, sans build). Cette première étape reproduit
le **header** et la **bannière hero** du modèle fourni.

## Lancer le site

Ouvrir `index.html` dans un navigateur, ou servir le dossier :

```bash
npx http-server -p 8080
```

## Structure

```
index.html            Header + hero
assets/css/style.css  Styles (variables de couleurs en haut du fichier)
assets/js/main.js     Menu mobile + sous-menu « Compétences »
assets/img/           Images (placeholders à remplacer)
```

## Remplacer les images

Deux fichiers provisoires sont fournis ; il suffit de déposer les vrais visuels
et de mettre à jour les deux `src` dans `index.html` :

| Fichier                   | Rôle                          | Format conseillé                       |
|---------------------------|-------------------------------|----------------------------------------|
| `assets/img/hero-bg.svg`  | Photo de fond de la bannière  | JPG/WebP, ≥ 1920×1080                  |
| `assets/img/portrait.svg` | Portrait de l'avocat, détouré | PNG/WebP transparent, ~1000 px de haut |

Le logo « DA / AVOCAT » est composé en HTML (texte), aucune image n'est nécessaire ;
pour utiliser un logo image, remplacer le contenu du lien `.logo` par une balise `<img>`.

## Personnalisation rapide

Les couleurs et polices sont regroupées dans `:root` (`assets/css/style.css`) :

- `--brown` : barre de navigation et bouton foncé
- `--cream` : boutons clairs et sous-titre du hero
- `--font-title` : Playfair Display (titres)
- `--font-body` : Jost (textes et navigation)

## Points inclus

- Header fixe avec logo, navigation, sous-menu déroulant et bouton de prise de rendez-vous
- Hero plein écran : image de fond + dégradé, titre, sous-titre, accroche, deux boutons, portrait détouré
- Responsive (menu burger sous 1024 px), accessibilité de base (`aria-expanded`, fermeture au clavier `Échap`)
