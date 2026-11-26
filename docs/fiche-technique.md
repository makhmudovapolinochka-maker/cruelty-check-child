Fiche technique – Cruelty Check
Projet 2 – EMU2 · Équipe : Ihsan Allali et Polina Makhmudova
Version 01.00 · Date : 05/11/2026

Rappel du projet
Cruelty Check est un site WordPress qui aide les jeunes de 18 à 25 ans à vérifier en quelques secondes si une marque de maquillage est cruelty-free, végan et écoresponsable. Il propose aussi un guide des mentions et un Eco-Quiz pour apprendre progressivement.

Le site est consulté surtout sur téléphone, en magasin, au moment de l'achat : la rapidité et la lisibilité sur mobile guident tous nos choix.

Le message à retenir :
Notre message principal est : « Avant d'acheter, vérifie ta marque en quelques secondes ».

L'utilisateur doit retenir que vérifier une marque peut être réaliser rapidement, depuis son téléphone, et quand il en a besoin. Nous le transmettons avec un ton familier, par tutoiement, sans jargon et de manière positif afin de ne pas faire culpabiliser l'utilisateur.

En quoi le projet aide l'environnement (éco-challenge)
L'enjeu du projet est d'aider les jeunes consommateurs à mieux s'orienter parmi les nombreuses informations et mentions présentes dans l'univers des cosmétiques. Le site regorupe des informations concernant le statut cruelty-free des cosmétiques ainsi que leur statut végan et les informations concernant leur emballage.

## 1. Pages à produire

**Comment ?** Pages et modèles WordPress (back-end), dans notre thème enfant de Twenty Twenty-Five.

Le menu principal donne accès à quatre pages : **Recherche**, **Guide des mentions**, **Eco-Quiz** et **Newsletter**. Le logo ramène à l'accueil.

## 2. Sections et composants

**Comment ?** Blocs Gutenberg, compositions (*patterns*) et parties de modèle (*template parts*) dans le thème enfant. **Pourquoi ?** Des composants réutilisables gardent le site cohérent et s'adaptent aux supports : mobile en priorité, puis tablette et ordinateur.

## 3. Contenus et médias

**Comment ?** CSS du thème enfant (style.css) et fichier theme.json pour les réglages globaux. **Pourquoi ?** Définir une seule fois les couleurs, typographies et espacements garantit une identité visuelle cohérente et facilite les modifications.

| **Réglage**  | **Quoi ?**                                                                            | **Outil**                                                        |
|--------------|---------------------------------------------------------------------------------------|------------------------------------------------------------------|
| Couleurs     | Palette issue de la maquette Figma (couleurs douces) et couleurs des badges oui / non | theme.json et variables CSS dans style.css                       |
| Typographies | Une police douce et lisible pour le texte, une touche cursive pour les titres         | theme.json (Google Fonts hébergées localement)                   |
| Espacements  | Échelle d'espacements commune (petit, moyen, grand)                                   | theme.json                                                       |
| Images       | Logos des marques, icônes des critères, illustrations                                 | Médiathèque WordPress, format WebP, texte alternatif obligatoire |

**Interactions attendues :** effet au survol et au focus clavier sur les boutons et les cartes, transition douce à l'ouverture de l'accordéon et du menu.

## 4. Gestion d'états

**Comment ?** JavaScript (fichiers dans assets/js/), ajouté au thème via functions.php. **Pourquoi ?** L'interface doit toujours montrer à l'utilisateur ce qui se passe.

## 5. Données dynamiques

**Comment ?** Base de données MySQL de WordPress, type de contenu « Marque » avec des champs **Advanced Custom Fields (ACF)**, et éventuellement une API externe. **Pourquoi ?** Les engagements des marques changent : les données doivent pouvoir être mises à jour facilement, sans toucher au code.

### Données internes : la fiche « Marque »

| **Champ**             | **Type**                          |
|-----------------------|-----------------------------------|
| Nom                   | Texte                             |
| Logo                  | Image                             |
| Cruelty-free          | Oui / non                         |
| Végan                 | Oui / non / partiellement         |
| Emballage             | Texte (recyclable, rechargeable…) |
| Recharges disponibles | Oui / non                         |
| Labels                | Liste (Leaping Bunny, PETA…)      |
| Sources               | Liens                             |
| Date de mise à jour   | Date                              |

### Idée d'API externe

**Open Beauty Facts**, une base de données ouverte et collaborative de produits cosmétiques. Elle pourrait compléter nos fiches avec la liste des ingrédients d'un produit.

### Valeur pour l'eco-challenge

Les fiches marques alimentent aussi l'Eco-Quiz : des questions peuvent porter sur de vraies marques du site (« Cette marque est-elle cruelty-free ? »). Le score et le niveau du membre sont enregistrés dans son compte et affichés dans l'en-tête (par exemple « Souris · Expert »), ce qui donne envie de progresser et de revenir.


## 6. Fonction « intelligente »

**Quoi ?** Un **chatbot IA** qui répond aux questions sur les mentions, les labels et les marques. **Comment ?** Une extension WordPress de chatbot reliée à une API d'IA, limitée au contenu du site (fiches marques, guide des mentions, FAQ). **Pourquoi ?** Notre public est débutant : il peut poser une question simple avec ses propres mots (« C'est quoi la différence entre vegan et cruelty-free ? ») et obtenir une réponse immédiate, au lieu de parcourir plusieurs pages.

**Règles :**

- un message indique clairement qu'il s'agit d'une IA ;

- les conversations ne sont jamais enregistrées, même pour les membres connectés ;

- la clé d'API reste dans les réglages du site, jamais visible des visiteurs ;

- en cas de doute, le chatbot renvoie vers la fiche ou la page du guide concernée.

## Outils et justification

## Contraintes

| **Type**      | **Contrainte**                                                                           | **Notre réponse**                                                                                              |
|---------------|------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------|
| Temps         | 75 jours (15 semaines) pour concevoir et développer                                      | Planning suivi dans GitHub Projects, fonctionnalités prioritaires d'abord (recherche, fiche marque)            |
| Budget        | 27 835 € HT de création, budget publicitaire limité                                      | Extensions gratuites ou peu coûteuses, promotion surtout sur des canaux gratuits                               |
| Données       | Collecter et mettre à jour des informations fiables sur les marques                      | Sources indiquées sur chaque fiche, date de mise à jour visible                                                |
| Usage mobile  | Consultation en magasin, souvent avec une connexion lente                                | Conception mobile en priorité, images légères, pages rapides                                                   |
| Accessibilité | Textes contrastés, navigation au clavier, images décrites, boutons tactiles assez grands | Vérification à chaque composant                                                                                |
| Navigateurs   | Chrome, Firefox, Safari et Edge                                                          | Tests sur chacun avant la mise en ligne                                                                        |
| RGPD          | Données personnelles limitées (e-mail, pseudo)                                           | Bannière de cookies, politique de confidentialité, suppression du compte possible, chatbot sans enregistrement |
| Sécurité      | Site WordPress exposé aux attaques                                                       | HTTPS, mises à jour régulières, extension de sécurité, sauvegardes automatiques, clé d'API protégée            |
| Équipe        | Deux personnes aux compétences différentes                                               | Rôles clairs : Ihsan pour l'UX/UI et les contenus, Polina pour le développement                                |
| Langues       | Site en français et en anglais                                                           | Polylang, contenus traduits page par page                                                                      |

### Les 3 règles de notre audit

**Test du site de référence :** nous avons passé la page [https://ethicalelephant.com/is-grown-alchemist-cruelty-free-vegan/] du site [Ethical Elephant]
au validateur W3C : ... Pour notre site, nous retenons que [___].

![Résultat du validateur W3C](audit-w3c-ethical-elephant.png)

1. Le HTML de chaque page est [___] ...
2. ...
3. ...

*Cette fiche évoluera avec le projet : wireframes, maquettes et design system.*

## Justification du design system (Atelier DFEF #4)

1. **Tokens dans `theme.json`** : 5 couleurs nommées par rôle (fond, surface, principale, texte, surface-alt), 2 polices Google gratuites proches de la maquette (Playfair Display, Source Serif 4), 4 tailles dont 2 fluides et 4 espacements. La palette est verrouillée dans Gutenberg pour garder un site cohérent.
2. **Composant `eco-card`** (`assets/css/components/card.css`) : aucune valeur en dur, uniquement des variables issues de `theme.json`, avec `:hover`, `:focus-within`, `:focus-visible` et `prefers-reduced-motion`. Il est réutilisé dans la composition `grille-cartes` et dans la fiche marque.
3. **Structure** : en-tête et pied de page en parties de modèle, grille de cartes en composition, et modèles `front-page.html` et `page.html` pour n'avoir qu'un seul `h1` par page. Le menu devient un burger sur mobile.
4. **Accessibilité** : contrastes élevés (texte vert foncé sur fond crème, texte crème sur le pied de page vert foncé), texte alternatif sur chaque image, label sur la barre de recherche, langue `fr-FR`.
5. **Images et responsive** : images converties en WebP (640 Ko → 23,8 Ko, soit −96 %) et servies en plusieurs tailles grâce au `srcset` de WordPress. Pages testées en 375, 768 et 1280 px, sans défilement horizontal.