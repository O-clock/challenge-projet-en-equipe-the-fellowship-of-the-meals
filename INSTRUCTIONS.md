
- les lead dev, créez l'environnement de travail pour votre team:
  - arborescence : vous la connaissez.
  - préparez tout ce qu'il faut: la connexion à la BD, les dossiers pour les templates, les templates de base (header, footer...), un premier script pour l'accueil, bootsrap et jquery si vous voulez les utiliser.
  - attention, n'oubliez pas de créer le fichier `.gitignore`, le fichier de config (qui sera ignoré), et son modèle (qui sera partagé)
  - et le README.md : expliquez à vos collègues comment faire leur config, s'ils ont oublié.
  - par défaut, vous êtes sur *master*. créez  *preprod* et *develop*.
  - n'oubliez pas de push et de préciser à vos collègues quand c'est fait: ils doivent faire le travail sur *develop*!!

- les lead DB:
  - créez la BD à partir du schéma validé ensemble
  - insérez qq données de test (ou, si vous êtes motivés, utilisez [faker](https://github.com/fzaninotto/Faker))
  - exportez le schéma et les données
  - ajoutez les scripts au code, partagez le dans *develop*, expliquez dans le README à vos collègues où est quoi.

- les chefs de projet:
  - ajoutez les tâches de dev: la base de données, la création de l'architecture
  - vérifiez que les tâches du prochain sprint sont bien identifiées
  - ajoutez les pièces jointes aux tâches d'intégration: wireframes
  - faites passer les stories du sprint 1 dans la TODO list, et assignez les personnes concernées ^^

- tout le monde:
  - clonez le repo
  - installez la bd et créez votre fichier de config
  - allez chercher une tâche (user-story) dans la liste
  - c'est parti! :nerd_face:
  - n'oubliez pas de vous parler, quand même.
