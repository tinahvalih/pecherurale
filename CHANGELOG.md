# Changelog

## 2026-06-16

### Page chapitres

- Ajout de `chapitre-video.php`, une page de lecture plein ecran pour les videos de chapitre.
- Recalage des proportions de `chapitre-video.php` sur celles de la page intro : largeur video, paddings et scotch.
- Remise du cadre papier complet sur `chapitre-video.php` avec `border-top`, `border-right`, `border-bottom` et `border-left`.
- Ajout d'un bouton retour vers `chapitres.php` avec fond `piece-icon.png` et chevron.
- Transformation du bouton retour en header de page video avec retour a gauche et menu papier a droite.
- Alignement de la position et de la taille du bouton menu video sur le header de `chapitres.php`.
- Remplacement des boutons play des cartes chapitre par des liens vers la page de lecture video.
- Ajout sur la page video d'un titre chapitre, d'un cadre type intro, du scotch et des boutons papier "En savoir plus" / "Chapitre suivant".
- Activation des controles Vimeo et retrait du mode muet sur les videos de chapitre.
- Reduction des tailles de textes et des espacements pour rapprocher la page d'un affichage complet en un seul viewport.
- Suppression de la bande noire en haut de `chapitres.php` en remplacant la marge externe du cadre par un padding de page.
- Creation de `chapitres.php` pour remplacer l'ancienne page `experience.php`.
- Ajout d'un header principal encadre avec logo, titre du documentaire et bouton menu papier.
- Ajout d'une zone titre avec "Explorer le journal de bord" et une courte description.
- Ajout de deux cartes chapitre avec video, bouton lecture, scotch et bouton papier "Explorer ce Chapitre".
- Conservation de `experience.php` comme redirection vers `chapitres.php` pour les anciens liens.

### Navigation

- Mise a jour du lien "Chapitres" dans le menu offcanvas vers `chapitres.php`.
- Mise a jour de la sortie de l'introduction pour diriger vers `chapitres.php`.
- Alignement du timing de transition de fin d'introduction avec la transition papier.
- Retrait du mode muet force sur la video d'introduction.

### Startup intro

- Suppression du cache `localStorage` qui masquait automatiquement la startup intro pendant 24h.

## 2026-06-15

### Transition de page

- Remplacement de l'ancienne transition noire avec flou par une transition papier.
- Ajout d'un rideau blanc pousse par `border-bottom.png`, qui monte depuis le bas avant le changement de page.
- La transition redescend automatiquement apres le chargement de la nouvelle page.
- Conservation du comportement normal des liens ouverts avec Ctrl/Cmd, Shift ou nouvel onglet.

### Menu offcanvas

- Refonte de l'ouverture du menu avec une feuille blanche glissante.
- Utilisation de `border-right.png` comme bord dechire vertical du panneau.
- Mise a jour des entrees selon la maquette : Accueil, Chapitres, Immersions, Archives, A propos, Docu. complet.
- Reorganisation du selecteur de langue en FR, EN, KR.
- Simplification du footer du menu en Mentions legales / Credits.
