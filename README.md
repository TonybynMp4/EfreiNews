# Projet site web "Efrei News"

Ce projet est un petit site d'actualité sur le thème (super original) de l'Efrei. Il est réalisé en tant que projet final du cours de PHP & d'Alpine JS (Une pierre deux coups!).

## Utilisation
Pour utiliser ce projet,

- Mettez les fichiers sur un serveur web supportant PHP & Apache (Xampp en gros).
- Configurez le fichier `config.php`.
    - Remplissez les champs `DB_` avec les informations de votre base de données.
    - Remplissez le champ `BASE_URL` avec le chemin vers index.php (ex: vous avez mis le projet dans un dossier `efreinews` à la racine de votre serveur, donc `BASE_URL` sera `/efreinews/public/`).
- Exécutez le script `db.sql` pour créer la base de données pour créer les tables nécessaires.
- Rendez vous sur l'URl correspondante (localhost)

De base, aucun utilisateur/administrateur n'est créé, vous devrez donc en créer un via la page d'inscription. (Définissez `DEBUG` à `false` pour désactiver la création de compte administrateur après ça).

Pour créer des articles, il faut être connecté en tant qu'administrateur, et accéder à la page `admin`.

## Fonctionnalités
- Inscription/Connexion
- Création d'articles
    - Supporte le Markdown (titre, texte, image, lien)
    - Depuis l'interface d'administration
    - Date de publication + auteur
- Mode sombre

## Utilisation d'Alpine JS
Alpine JS est utilisé pour la gestion du mode sombre, et divers éléments comme la prévisualisation de l'article en cours de rédaction.

Concepts utilisés:
- `x-data`
- `x-bind`
- `x-if`
- `x-for`
- `x-text`
- `x-cloak`
- `x-model`
- `x-show`
- `$persist`
- `x-init`
- `store`
- `x-html`
- `x-on` / `@`