# Dashboard standard pour mon travail

Ce projet est un tableau de bord d'administration standard conçu pour faciliter la gestion et la réalisation de mes projets professionnels. Il propose différents rôles et permissions tels que super-administrateur, utilisateur et manager.

## Instructions de configuration

Pour mettre en place ce tableau de bord sur votre machine, suivez les étapes suivantes :

1. **Installation des dépendances**

   - Vérifiez que vous avez Composer installé sur votre machine.
   - Ouvrez votre terminal et accédez au répertoire du projet.
   - Exécutez la commande suivante pour mettre à jour les dépendances du projet :
     ```sh
     cd "répertoire du projet"
     composer update
     ```

2. **Configuration du fichier .env**

   - Après cette configuration initiale, recherchez le fichier .env.example à la racine du projet et renommez-le en .env.
   - Ouvrez le fichier .env et ajustez les constantes du système en fonction de vos besoins spécifiques.

3. **Migration et création de données initiales**

   - Accédez au répertoire racine du projet à l'aide de votre terminal.
   - Exécutez la commande suivante pour migrer et alimenter la base de données :
     ```sh
     php artisan migrate --seed
     ```

4. **Installation des dépendances Node.js et compilation des assets**

   - Assurez-vous d'avoir Node.js installé sur votre machine.
   - Exécutez les commandes suivantes dans votre terminal pour installer les dépendances Node.js nécessaires et compiler les assets :
     ```sh
     npm install
     npm run dev
     ```

5. **Lancement du serveur local**

   - Enfin, exécutez la commande suivante pour démarrer le serveur local du système sur votre ordinateur :
     ```sh
     php artisan serve
     ```

## Auteur
Ce projet a été développé par [BEZARA Florent](lien_vers_profil_github).

## Licence
Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Contributions
Nous accueillons les contributions à ce projet. N'hésitez pas à contribuer en ouvrant des problèmes, en proposant des fonctionnalités ou en envoyant des demandes de fusion (pull requests) sur GitHub.

Vous pouvez maintenant explorer et utiliser les fonctionnalités du tableau de bord pour gérer et réaliser efficacement vos projets. Profitez de cette solution pour simplifier votre travail quotidien et améliorer votre productivité !
