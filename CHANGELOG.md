# Changelog


## 2026-06-16

### 10:00 - Page chapitres

- Creation de `chapitres.php` pour remplacer l'ancienne page `experience.php`.
- Ajout d'un header principal encadre avec logo, titre du documentaire et bouton menu papier.
- Ajout d'une zone titre avec "Explorer le journal de bord" et une courte description.
- Ajout de deux cartes chapitre avec video, bouton lecture, scotch et bouton papier "Explorer ce Chapitre".
- Conservation de `experience.php` comme redirection vers `chapitres.php` pour les anciens liens.

### 10:20 - Navigation chapitres

- Mise a jour du lien "Chapitres" dans le menu offcanvas vers `chapitres.php`.
- Mise a jour de la sortie de l'introduction pour diriger vers `chapitres.php`.
- Alignement du timing de transition de fin d'introduction avec la transition papier.
- Retrait du mode muet force sur la video d'introduction.

### 10:45 - Ajustements page chapitres

- Reduction des tailles de textes et des espacements pour rapprocher la page d'un affichage complet en un seul viewport.
- Suppression de la bande noire en haut de `chapitres.php` en remplacant la marge externe du cadre par un padding de page.

### 11:15 - Page video chapitre

- Ajout de `chapitre-video.php`, une page de lecture plein ecran pour les videos de chapitre.
- Remplacement des boutons play des cartes chapitre par des liens vers la page de lecture video.
- Ajout sur la page video d'un titre chapitre, d'un cadre type intro, du scotch et des boutons papier "En savoir plus" / "Chapitre suivant".
- Activation des controles Vimeo et retrait du mode muet sur les videos de chapitre.

### 11:40 - Proportions page video

- Recalage des proportions de `chapitre-video.php` sur celles de la page intro : largeur video, paddings et scotch.
- Remise du cadre papier complet sur `chapitre-video.php` avec `border-top`, `border-right`, `border-bottom` et `border-left`.
- Ajout d'un bouton retour vers `chapitres.php` avec fond `piece-icon.png` et chevron.

### 12:05 - Header page video

- Transformation du bouton retour en header de page video avec retour a gauche et menu papier a droite.
- Alignement de la position et de la taille du bouton menu video sur le header de `chapitres.php`.

### 13:30 - Startup intro et cache

- Suppression du cache `localStorage` qui masquait automatiquement la startup intro pendant 24h.
- Ajout d'une memoire `sessionStorage` : la startup intro reste masquee pendant la navigation dans le meme onglet, puis se remet a zero quand l'onglet est ferme.

### 13:50 - Developpement

- Ajout d'un `.htaccess` pour desactiver le cache navigateur des fichiers CSS et JS pendant le developpement.

### 14:30 - Refonte startup intro

- Refonte visuelle de la startup intro selon la nouvelle maquette.
- Recalage de la startup intro sur `startup-paper.png` comme support central et `headphone.png` pour l'ecran immersion.
- Application des tailles typo donnees pour le design 1080p : texte coreen, traduction Space Mono et texte casque.
- Mise a jour du deuxieme ecran avec bouton `Commencer` et mention d'acceptation de l'ambiance sonore.
- Ajout d'une animation de sortie descendante pour que le papier quitte l'ecran comme la transition de page.
- Ajout du contour `border-bottom.png` visible pendant la descente de la startup intro.

### 15:34 - Changelog

- Reorganisation du changelog avec des heures pour suivre l'ordre consecutif des changements.

## 2026-06-15

### 14:00 - Transition de page

- Remplacement de l'ancienne transition noire avec flou par une transition papier.
- Ajout d'un rideau blanc pousse par `border-bottom.png`, qui monte depuis le bas avant le changement de page.
- La transition redescend automatiquement apres le chargement de la nouvelle page.
- Conservation du comportement normal des liens ouverts avec Ctrl/Cmd, Shift ou nouvel onglet.

### 14:30 - Menu offcanvas

- Refonte de l'ouverture du menu avec une feuille blanche glissante.
- Utilisation de `border-right.png` comme bord dechire vertical du panneau.
- Mise a jour des entrees selon la maquette : Accueil, Chapitres, Immersions, Archives, A propos, Docu. complet.
- Reorganisation du selecteur de langue en FR, EN, KR.
- Simplification du footer du menu en Mentions legales / Credits.
