# Changelog

## 2026-06-18

### 18:08 - Audios et couleurs des cassettes immersion

- Association de chaque cassette immersion a son fichier audio dedie : mer, restaurant, pluie et marche asiatique.
- Remplacement des filtres de couleur CSS par les vraies images `tape.png`, `tape-yellow.png`, `tape-green.png` et `tape-blue.png`.
- Mise a jour du tiroir audio pour afficher la cassette correspondant a la piste selectionnee.

### 17:46 - Sections supplementaires immersion

- Ajout d'une deuxieme section d'ecoute en disposition inversee : description a gauche, cassette a droite.
- Ajout du bandeau `Jagalchi Market & Busan` avec indication de lecture.
- Ajout d'une grille de deux cassettes cliquables pour les sons Jagalchi / Busan.
- Ajout d'un CTA final bleu vers `chapitres.php`.
- Branchement temporaire des nouvelles cassettes sur l'audio exemple `sea-expressing.mp3`.

### 16:41 - Corrections tiroir audio

- Correction du z-index entre le bord papier gauche et la cassette du tiroir audio.
- La cassette passe maintenant devant le bord dechire comme dans la reference.
- Refonte du bouton lecture du tiroir sur la meme base visuelle que le bouton hamburger, avec icone lecture/pause.

### 16:22 - Ajustements tiroir audio

- Ajout d'une fermeture animee du tiroir audio lors du clic outside.
- Decalage de la cassette pour qu'elle depasse davantage du panneau comme sur la reference.
- Reduction des tailles de texte et des espacements du tiroir pour faire tenir le contenu.


## 16:15 - Ajustement de la Video Landing Page
- Rectification de la video de landing page pour que ca soit en boucle sans cut

### 16:14 - Offcanvas audio

- Refonte visuelle du panneau audio ouvert depuis la gauche selon la nouvelle reference.
- Ajout de la cassette scotchee en haut du panneau avec `tape.png` et `scotch.png`.
- Recalage du titre, de la description, de la note casque et du bouton lecture papier.
- Synchronisation de l'icone lecture/pause du panneau avec l'etat de l'audio en cours.

### 15:16 - Ajustement mini lecteur audio

- Repositionnement du mini-lecteur audio global en bas a gauche.
- Reduction importante de la taille du bloc et des textes.
- Ajout du label "Lecture en cours" au-dessus du titre de la bande son.

### 15:11 - Mini lecteur audio papier

- Refonte visuelle du mini-lecteur audio global en bas a droite.
- Remplacement du bloc encadre par un bouton papier `piece-icon.png` et une bande titre `button-paper-2.png`.
- Conservation du comportement play/pause existant avec hover instantane sans transition.

### 14:53 - Refonte page immersion audio

- Refonte de `immersion.php` autour d'une cassette cliquable et d'un bloc description pointille.
- Ajout d'un panneau audio offcanvas depuis la gauche avec bord papier `border-left.png`.
- Branchement de `sea-expressing.mp3` sur la cassette avec lecture directe au clic.
- Ajout d'un mini-lecteur global en bas a gauche pour pauser ou relancer l'ambiance sonore.
- Sauvegarde de l'audio en cours pour retrouver le mini-lecteur apres navigation entre pages.
- Note technique : avec des pages PHP rechargees, la lecture peut etre restauree apres changement de page, mais pas rester parfaitement continue sans architecture de navigation persistante.

### 14:18 - CTA portraits page chapitres

- Ajout d'un bouton papier "Decouvrir les portraits" dans le bloc `Portraits / Personnages`.
- Conservation d'un hover instantane sur les nouveaux CTA, sans transition CSS.
- Note de coherence : les prochains boutons ajoutes garderont un hover sans transition.

### 13:58 - Suite de parcours page chapitres

- Ajout d'un bloc sous les chapitres pour prolonger le parcours vers les portraits, l'experience sonore et le documentaire complet.
- Ajout d'une carte "Experience sonore" avec `tape.png`, tag immersion et CTA "Explorer les immersions".
- Ajout d'une bande CTA finale sur fond bleu avec motif poisson pour revenir vers le documentaire.
- Adaptation responsive du nouveau bloc pour mobile et tablette.

## 2026-06-17

### 17:30 - Cache busting des assets

- Ajout de `includes/assets.php` avec une fonction `asset()` basee sur `filemtime`.
- Remplacement des chargements CSS/JS locaux par des URLs versionnees avec `?v=...`.
- Chargement direct des fichiers CSS dans les pages pour eviter le cache des `@import`.
- Ajout d'une version aux fichiers de traduction JSON charges par `language-switcher.js`.

### 16:40 - Ajustements page immersions

- Recalage du bloc categories / casque / description pour mieux suivre la reference.
- Ajout d'animations hover sur les categories Geoje Island et Jagalchi.
- Ajout d'animations hover sur les boutons papier des lecteurs et du CTA final.
- Suppression du carre gris dans les blocs description des sections bande son.

### 16:19 - Page immersions sonores

- Creation de `immersion.php` avec header journal, titre "Explorer par l'ecoute" et description.
- Ajout du bloc categories Geoje Island / Jagalchi avec description generale et image `headphone.png`.
- Ajout des titres de categories avec `anchor-icon2.svg` et fond `illustration-sectionbackground.png`.
- Ajout de sections bande son alternees : video hover muette sans controles, lecteur papier, bouton agrandir et bloc description.
- Ajout des separateurs pointilles entre les bandes sonores et du CTA final vers les chapitres.
- Branchement de `assets/js/immersion.js` pour lancer les videos au survol et les remettre au debut en sortie.
- Mise a jour du menu offcanvas pour faire pointer `Immersions` vers `immersion.php`.

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
