# Projet RateMyHero

## Résumé du projet

Ce projet répertorie les **héros et vilains** de vos films et séries préférées.
Les notes sont attribuées par la communauté pour donner une note réaliste à chaque personnage.

### Setup

```bash
git clone git@github.com:ImMyst/RateYourHero.git
vagrant up
vagrant ssh
make install
make start
```
On peut également relancer la base de donnée

```bash
make fixtures
```

### Login
Pour se connecter en **admin** :angel:

```bash
Admin:

Identifiant: monsieur :man:
Mot de passe: monsieur
```

Pour se connecter en **user lambda** :baby:

```bash
User:

Identifiant: madame :woman:
Mot de passe: madame
```

### ToDo List

Après la fin de ce projet, ils nous restent encore beaucoup de fonctionnalités à implémenter. Nous allons donc faire une liste non exaustive de ces fonctionnalités :

- Apparence générale :
  - Modifier et améliorer le **CSS**, pourquoi pas utiliser un template déjà existant pour rendre le site plus attractif.
  - Avoir des véritables îcones, à la place de ceux proposé par *font-awesome*

- Homepage:
  - Afficher les entrées récentes de personnages et films
  - Afficher les différentes catégories de personnages (hero, vilain, anti-hero ...)

- Listes héros et films:
  - Avoir accès à une **API** pour récolter les données sur une plus grande base de données de personnages et de films.

- Admin:
  - Avoir une vraie page admin capable de supprimer ou ajouter des personnages ou films, ainsi que de modérer les reviews faites sur les héros.

- Autres:
  - Implémenter un **forum** serait une idée intéressante pour impliquer un peu plus les personnes dans l'avancée du site.
