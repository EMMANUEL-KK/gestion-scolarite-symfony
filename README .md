# e-FSDM — Application de Gestion Scolaire (Symfony)

Application web développée avec **Symfony** permettant la gestion des données universitaires de la Faculté des Sciences Dhar El Mahraz (FSDM), Fès.

## 📋 Description

e-FSDM est une application de gestion universitaire qui permet de gérer facilement :

- **Départements**
- **Filières**
- **Modules**
- **Professeurs**
- **Étudiants**
- **Salles**

Pour chaque entité, l'application propose un CRUD complet (Créer, Lire, Modifier, Supprimer) via une interface web simple et claire.

## 🛠️ Technologies utilisées

- **Symfony** (PHP) — Framework backend
- **Doctrine ORM** — Gestion de la base de données
- **Twig** — Moteur de templates
- **MySQL** — Base de données
- **HTML / CSS** — Interface utilisateur

## ⚙️ Fonctionnalités

- Consultation des listes (départements, étudiants, filières, modules, professeurs, salles)
- Ajout de nouvelles données
- Modification des enregistrements existants
- Suppression des enregistrements obsolètes
- Navigation via un menu principal commun à toutes les pages

## 🚀 Installation

1. Cloner le dépôt :
```bash
git clone https://github.com/EMMANUEL-KK/gestion-scolarite-symfony.git
cd gestion-scolarite-symfony
```

2. Installer les dépendances :
```bash
composer install
```

3. Configurer la base de données dans le fichier `.env` :
```
DATABASE_URL="mysql://user:password@127.0.0.1:3306/nom_de_la_base"
```

4. Créer la base de données et exécuter les migrations :
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. Lancer le serveur :
```bash
symfony server:start
```
ou via un serveur local (EasyPHP, XAMPP, WAMP...).

## 👤 Auteur

**KIRE Ange Aubrey Emmanuel**
Étudiant en Génie Informatique — Faculté des Sciences Dhar El Mahraz (FSDM), Fès

## 📄 Contexte

Projet réalisé dans le cadre d'un examen (Colle) illustrant les principes de la programmation orientée objet en PHP avec le framework Symfony.
