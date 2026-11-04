# Cruelty Check – Thème enfant WordPress

Thème enfant basé sur **Twenty Twenty-Five** pour le projet **Cruelty Check** (Projet 2 – EMU2).

## Le concept

Cruelty Check est un site web qui aide les jeunes consommateurs de maquillage à adopter une routine beauté plus écoresponsable.
Grâce à un moteur de recherche par marque ou par produit, l'utilisateur vérifie en quelques secondes trois critères clés :

- le statut **cruelty-free** (pas de tests sur les animaux)
- la certification **végan**
- l'**impact écoresponsable** (emballage, recharges)

**Public cible :** les 18-25 ans, sensibles à l'éthique mais débutants sur le sujet, qui cherchent l'information sur leur téléphone au moment de l'achat.

**Notre message :** « Avant d'acheter, vérifie ta marque en quelques secondes. »

## L'équipe

| Membre | Rôle | Missions |
|---|---|---|
| **Ihsan Allali** | Cheffe de projet et UX/UI designer | Planning, parcours utilisateur, wireframes, maquettes, rédaction des pages de sensibilisation |
| **Polina Makhmudova** | Lead technique et développement web | Architecture du site, base de données des marques, moteur de recherche, intégration des maquettes, tests et mise en ligne |

## Fonctionnalités prévues

- Menu principal et choix de langue FR/EN
- Recherche d'une marque ou d'un produit, avec suggestions
- Recherches populaires
- Page de résultats avec filtres (vegan, cruelty-free, recharges)
- Fiche marque détaillée (badges, explications, sources, date de mise à jour)
- Guide des mentions (Cruelty-Free, Vegan, Emballage responsable)
- FAQ en accordéon
- Eco-Quiz sur 3 niveaux, avec score et correction
- Chatbot IA « Besoin d'aide ? » sur les mentions cruelty-free, végan et emballage responsable

## Fonction intelligente : le chatbot IA

**Pourquoi ?** Nos visiteurs confondent souvent les mentions végan, cruelty-free et
emballage responsable, et doivent chercher l'information sur plusieurs pages.
Le chatbot leur donne une explication simple en quelques secondes.

**Comment ça marche ?**
- **Où :** un bouton « Besoin d'aide ? » visible sur toutes les pages
- **Entrée :** le visiteur pose sa question
- **Traitement :** le chatbot cherche la réponse uniquement dans les contenus du site
  (guide des mentions, FAQ, fiches marques et produits)
- **Sortie :** une explication simple, avec un lien vers la page correspondante

**Limites :** il ne cherche pas sur Internet, ne crée pas de nouveaux contenus et
ne répond qu'à partir des informations du site.

**Solution de repli :** si le chatbot ne peut pas répondre (service indisponible,
question hors sujet), le visiteur est redirigé vers la FAQ et le guide des mentions.

**Outil :** Chatbase ou équivalent, à confirmer après les tests
(version gratuite avec un quota de messages).

**Sécurité et transparence**
- Aucune clé d'accès dans le code ni dans GitHub
- Aucune donnée personnelle envoyée à l'IA
- Un message indique clairement au visiteur qu'il parle à une IA

## Outils utilisés

- **WordPress** et le thème parent **Twenty Twenty-Five** : CMS du site
- **Advanced Custom Fields (ACF)** : champs des fiches marques et produits
- **Polylang** : version française et anglaise
- **Local** : environnement WordPress sur nos ordinateurs
- **Git, GitHub et GitHub Desktop** : versionnement et travail en équipe
- **Visual Studio Code** : éditeur de code
- **GitHub Projects** : suivi des tâches

## Structure du thème

```
cruelty-check-child/
├── assets/         → CSS, images et JavaScript
├── parts/          → parties réutilisables (en-tête, pied de page)
├── patterns/       → compositions de blocs
├── templates/      → modèles de pages (accueil, fiche marque…)
├── .gitignore      → fichiers que Git ne doit pas envoyer sur GitHub
├── functions.php   → fonctions du thème
├── README.md       → présentation du projet et conventions de l'équipe
└── style.css       → identité du thème et styles
```

## Nos conventions

### Branches
- `main` : version stable, on ne travaille **jamais** directement dessus
- `feature/nom` : nouvelle fonctionnalité (ex. `feature/fiche-marque`)
- `fix/nom` : correction (ex. `fix/menu-mobile`)
- `docs/nom` : documentation (ex. `docs/readme`)

### Commits
Messages courts en français, qui commencent par un type :
- `feat:` nouvelle fonctionnalité, par exemple `feat: ajout de la barre de recherche`
- `fix:` correction, par exemple `fix: affichage du menu sur mobile`
- `style:` CSS ou design, par exemple `style: couleurs principales`
- `docs:` documentation, par exemple `docs: mise à jour du README`

### Pull requests
- Chaque modification passe par une **pull request** vers `main`
- L'autre membre **relit** avant la fusion

## Répartition des tâches

| Tâche | Responsable |
|---|---|
| Planning et suivi du projet | Ihsan |
| Parcours utilisateur, wireframes et maquettes | Ihsan |
| Identité visuelle (couleurs, typographies) | Ihsan |
| Rédaction du guide des mentions et de la FAQ | Ihsan |
| Contenu de l'Eco-Quiz | Ihsan |
| Thème enfant et structure du dépôt | Polina |
| Base de données des marques (ACF) | Polina |
| Moteur de recherche et filtres | Polina |
| Intégration des maquettes et version FR/EN | Polina |
| Tests et mise en ligne | Polina |

Le suivi détaillé se trouve dans l'onglet **Projects** du dépôt.

## Installation

1. Installer [Local](https://localwp.com) et créer un site WordPress
2. Cloner ce dépôt dans `wp-content/themes/`
3. Dans WordPress : **Apparence → Thèmes → activer « Cruelty Check Child »**