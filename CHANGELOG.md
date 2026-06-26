# Changelog

## 2026-06-27

### 00:30 - Pause audio sur pages video

- Ajout d'une pause automatique de l'audio immersion quand l'utilisateur arrive sur `intro.php`, `chapitre-video.php` ou `documentaire.php`.
- Desactivation de la reprise automatique du mini-lecteur sur les pages de visionnage video pour eviter le chevauchement sonore.

### 00:25 - Titres chapitres en deux lignes

- Separation des titres des cartes chapitre sur `chapitres.php` : ligne `Chapitre X`, puis ligne du nom du chapitre.
- Ajout des cles FR/KR dediees pour conserver le changement de langue.
- Centrage et calage CSS des deux lignes de titre.

### 00:17 - Portraits chapitre 2

- Remplacement des textes placeholder des personnages du chapitre 2.
- Ajout des descriptions FR/KR validees pour Choi Jung-hoon et Han So-hui dans `chapitre-info.php`.

### 00:03 - Chapitre 2 et correction des accents

- Correction de `chapitre-info.php?chapitre=2` : ajout de la configuration dediee au chapitre 2 avec personnages, galerie et bloc d'informations Busan.
- Remplacement de la description de `immersion.php` par la nouvelle phrase fournie.
- Suppression du texte descriptif sous le titre `Portraits / Personnages` dans les pages detail de chapitre.
- Restauration des accents manquants dans les textes francais principaux et dans les longs contenus i18n des archives.

## 2026-06-26

### 23:13 - Traduction note d'intention

- Remplacement de la traduction coreenne de la note d'intention de `a-propos.php` par la version validee fournie.

### 23:00 - Traductions immersion, a propos et chapitre info

- Traduction coreenne naturelle de `immersion.php` : titres, descriptions des cassettes, labels et CTA.
- Traduction coreenne de `a-propos.php` : note d'intention et roles de l'equipe selon la langue active.
- Relecture et remplacement des textes coreens de `chapitre-info.php` pour les descriptions, personnages, informations supplementaires, galeries et controles.

### 22:37 - Page a propos

- Creation de `a-propos.php` avec note d'intention et equipe complete.
- Ajout du style dedie `assets/css/about.css` dans la DA papier du site.
- Branchement du menu `A propos` et du CTA `A propos` de `chapitres.php` vers la nouvelle page.

### 22:12 - Titres chapitres

- Renommage du chapitre 1 en `Un tour en mer` / `바다 여행`.
- Renommage du chapitre 2 en `Retour sur la terre ferme` / `땅으로 돌아오다`.
- Mise a jour des titres sur `chapitres.php`, `chapitre-info.php` et `chapitre-video.php`.

### 22:08 - Video documentaire complet

- Mise a jour de l'ID Vimeo du documentaire complet vers `1204874341`.

### 20:20 - Lazy-loading images

- Ajout de `loading="lazy"` et `decoding="async"` sur les images de contenu non critiques : archives, galerie chapitre, blocs secondaires, cassettes immersion et logos partenaires.
- Conservation du chargement direct pour les images structurelles visibles au premier ecran : logo, bordures papier, icones de header et images principales.

### 14:38 - Fond papier et footer

- Remplacement du fond papier principal par `assets/img/ricepaper_texture.jpg` en motif repete.
- Suppression des marges basses des conteneurs de pages qui laissaient apparaitre une bande noire sous certains footers.
- Harmonisation du CTA de footer de `immersion.php` avec les autres CTA de fin de page.

### 02:33 - Menu offcanvas

- Suppression provisoire des liens `Mentions legales` et `Credits` en bas du menu.

### 01:10 - Sons et contenus immersion

- Branchement des quatre cassettes de `immersion.php` sur les nouveaux MP3 ajoutes dans `assets/audio`.
- Correction de l'association couleur/audio : rouge pour Eochon, bleu pour la livraison a Geoje, vert pour Yeongdo, jaune pour Jagalchi.
- Ajout des descriptions visibles sous les cassettes de la grille qui n'avaient pas encore de bloc descriptif.
- Remplacement provisoire des textes coreens de la page immersion par les contenus francais valides.

## 2026-06-25

### 19:46 - Galerie chapitre info

- Suppression des titres visibles en bas des polaroids dans `chapitre-info.php`.
- Conservation de l'espace blanc du polaroid et des textes alternatifs pour l'accessibilite.

### 15:13 - Images articles archives

- Suppression de l'ombre portee sur les images des articles archive.

## 2026-06-24

### 23:42 - Traductions chapitres et articles archives

- Verification des traductions coreennes de la page `chapitres.php` avec les notes fournies.
- Correction des libelles valides : introduction chapitres, titres, descriptions, CTA, documentaire complet et cassette `Sound of Geoje`.
- Branchement des carnets archive 2, 3 et 4 vers `archive-detail.php`.
- Ajout des articles detail `L'ile de Geoje`, `La peche` et `Les traditions` avec sections alternees texte/image.
- Ajout des images `archive2_imageX.png`, `archive3_imageX.png` et `archive4_imageX.png`, avec scotch et legende quand necessaire.
- Ajout des contenus et traductions FR/KR pour les nouveaux articles.

### 00:05 - Carnet PNG dans la section chapitres

- Remplacement du carnet compose en CSS dans le bloc `Consulter les articles et les archives`.
- Utilisation du PNG `assets/img/carnet_trad.png` pour reprendre un visuel carnet existant dans les assets.
- Nettoyage des styles CSS associes a l'ancien carnet dessine et ajout d'un texte alternatif FR/KR.

## 2026-06-23

### 23:47 - Section articles et a propos dans chapitres

- Ajout d'une section sous les chapitres avec un bloc `Consulter les articles et les archives`.
- Ajout d'un carnet `L'histoire` compose en CSS pour reprendre la maquette fournie.
- Ajout d'un bloc `En savoir plus` avec bouton `A propos`.
- Branchement du CTA archives vers `archive.php` et du CTA documentaire final vers `documentaire.php`.
- Ajout des traductions FR/KR pour les nouveaux textes de la section.

## 2026-06-22

### 08:20 - Documentaire complet plein ecran

- Remplacement de l'ouverture en pop-up du documentaire complet par une page dediee `documentaire.php`.
- Branchement du bouton d'accueil `Regarder le documentaire en entier` vers cette page plein ecran.
- Branchement de l'entree `Docu. complet` du menu vers `documentaire.php`.
- Ajout d'un lecteur Vimeo plein ecran dans la DA papier avec bordures, scotch et bouton `X` de retour a l'accueil.

### 08:06 - Pop-up documentaire complet

- Refonte du pop-up du bouton `Regarder le documentaire en entier` sur la page d'accueil.
- Ajout d'un cadre papier avec `border-top`, `border-right`, `border-bottom` et `border-left`.
- Ajout d'un scotch en haut a gauche du lecteur video.
- Remplacement du bouton de fermeture par un bouton `X` sur fond papier.

### 07:57 - Traduction archive circuit court

- Remplacement de la traduction coreenne automatique du premier article archive par la version validee.
- Mise a jour des sections `민락` et `자갈치` avec le texte fourni pour l'article `Le circuit court de la peche`.

### 07:47 - Detail archive circuit court

- Ajout de `archive-detail.php` pour le premier article `Le circuit court de la peche`.
- Branchement du bouton `Consulter` du premier carnet vers `archive-detail.php?article=1`.
- Ajout de quatre sections alternees texte/image avec les visuels `archive1_image1.png` a `archive1_image4.png`.
- Ajout du style detail archive avec grille 50/50, bordures et alternance image/texte.
- Ajout des traductions FR/KR du contenu de l'article et des textes alternatifs.

### 07:26 - Page Ancrage / Archives

- Creation de `archive.php` avec quatre carnets/articles : circuit court de la peche, ile de Geoje, traditions et peche.
- Ajout des titres directement superposes sur les couvertures des carnets.
- Ajout de descriptions courtes sous chaque carnet et d'un bouton `Consulter`.
- Ajout des traductions FR/KR pour la page, les titres, les descriptions, les boutons et les textes alternatifs.
- Branchement du menu `Ancrage` vers `archive.php` et chargement de `assets/css/archive.css`.

### 03:52 - Contenu detail chapitre 2

- Mise a jour des titres courts des chapitres : `Geoje` et `Busan`.
- Mise a jour des descriptions des cartes chapitres et de la page detail du chapitre 1.
- Ajout du contenu detail pour le chapitre 2 avec personnages, galerie `assets/img/chapter2/` et lien `En savoir plus`.
- Ajout de la section supplementaire Busan avec bloc difficultes et schema `distribution.png`.
- Mise a jour des traductions FR/KR liees aux nouveaux contenus des chapitres.

### 03:20 - Animation slider personnages

- Ajout d'une animation de slide sur la section personnages de `chapitre-info.php`.
- Direction de transition adaptee selon le passage au portrait suivant ou precedent.
- Animation separee sur le portrait, la carte texte et les points de navigation.
- Respect de `prefers-reduced-motion` pour desactiver l'animation si l'utilisateur le demande.

### 03:11 - Traduction et lightbox page chapitre detail

- Branchement de `chapitre-info.php` sur les cles i18n pour le chapitre 1, les portraits, les informations supplementaires, la galerie et le CTA final.
- Ajout des traductions coreennes pour la page detail du chapitre 1.
- Reduction des proportions de la page detail : titres, paddings, video, slider personnages, blocs d'informations, galerie et footer.
- Ajout d'une lightbox de galerie avec fond noir 60%, image sans polaroid, scotch en haut a gauche et navigation precedent/suivant.
- Extension du switcher aux paragraphes multi-lignes et aux labels composes comme les boutons de galerie.

### 02:24 - Traduction page immersion

- Branchement de `immersion.php` sur les cles i18n pour les titres, descriptions, instructions, CTA et labels accessibles.
- Ajout des traductions coreennes pour la page immersion sonore et ses quatre cassettes.
- Traduction des donnees audio envoyees au tiroir et au mini lecteur global.
- Extension du switcher de langue aux donnees audio des cassettes et aux listes de tags.
- Mise a jour du mini lecteur audio global pour adapter ses labels FR/KR sans relancer l'audio.

### 01:57 - Traduction page chapitres

- Branchement de `chapitres.php` sur les cles i18n pour les titres, descriptions, CTA et labels accessibles.
- Ajout des traductions coreennes fournies dans `trad2.pdf` pour la page chapitres.
- Conservation des textes francais deja en place pour ne pas modifier le contenu visible existant.
- Extension du switcher de langue aux attributs `alt` et `aria-label` pour garder les miniatures et boutons accessibles traduits.

### 01:39 - Traduction menu FR/KR

- Suppression de l'option `EN` du selecteur de langue dans le menu offcanvas.
- Branchement des libelles du menu et du footer sur les cles de traduction existantes.
- Ajout des traductions francaises et coreennes pour Accueil, Chapitres, Ancrage, Immersion, A propos et Docu. complet.
- Ajout des traductions pour Mentions legales et Credits.
- Nettoyage automatique d'une ancienne langue `en` stockee localement pour eviter un affichage incoherent.

### 01:05 - Plein ecran introduction

- Ajout d'un bouton plein ecran sur la video de la page `intro.php`.
- Conservation des controles Vimeo masques avec un controle plein ecran personnalise.
- Branchement via l'API Vimeo avec fallback sur le plein ecran navigateur du cadre video.

### 00:41 - Videos finales chapitres

- Remplacement de la video Vimeo du chapitre 1 par `1203265070`.
- Remplacement de la video Vimeo du chapitre 2 par `1203251886`.
- Mise a jour de l'introduction pour utiliser le debut du chapitre 1 et passer a la suite apres 41 secondes.

### 00:31 - Liens details chapitres

- Mise a jour des boutons `Explorer ce Chapitre` dans `chapitres.php`.
- Le chapitre 1 pointe vers `chapitre-info.php?chapitre=1`.
- Le chapitre 2 pointe vers `chapitre-info.php?chapitre=2`.

## 2026-06-21

### 20:12 - Miniatures chapitres

- Remplacement des anciennes videos utilisees comme miniatures dans `chapitres.php` par `chapter1_thumbnail.png` et `chapter2_thumbnail.png`.
- Mise a jour du poster de la video de `chapitre-info.php` pour utiliser la miniature du chapitre 1.
- Ajout des deux miniatures au versionnement des assets.

## 2026-06-19

### 13:45 - Page detail chapitre 1

- Ajout de `chapitre-info.php` comme modele de page "En savoir plus" pour le chapitre 1.
- Ajout de la section video + description, du slider personnages, des informations supplementaires, de la galerie polaroid et du CTA vers le chapitre 2.
- Ajout du slider automatique des personnages avec pause au survol.
- Branchement du bouton "En savoir plus" de `chapitre-video.php` vers la page detail du chapitre 1.
- Ajout d'un overlay noir de fin de video Vimeo pour masquer les suggestions et afficher les boutons seulement quand le chapitre est termine.

### 13:21 - Lien accueil menu

- Correction du lien `Accueil` du menu offcanvas pour pointer vers `./` au lieu de `index.php`.
- Correction identique du logo du header journal pour revenir vers la racine `/pecherurale/`.

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
