# Installation pour developpement :

```
cp .env.example .env
composer install
npm install
php artisan key:g
php artisan migrate
php artisan db:seed
php artisan storage:link
npm run dev
```

Si des erreurs surviennent sur le ```php artisan db:seed```, faire un ```composer dump-autoload``` et reprendre avec ```php artisan migrate:refresh```

Si des erreurs surviennent pendant le ```npm install```, essayer d'installer ce paquet sur la machine :
```sudo apt-get install build-essential```

Pour lier le dossier et pouvoir uploader des images, faire un ``` php artisan storage:link ```
=======
### Extension php à installer

- ``` sudo apt-get install php7.2-gd```


### Commande de compilations :

- ```npm run watch-poll``` : Permet de réécrire le sass en direct
- ```npm run dev``` : Permet de compiler le sass en css


## Attribution des rôles :

- Antony : back-end
- Dinh : lead back-end
- Dylan : front-end
- Patrice : lead front-end


# Le site 

Ce site a été créé dans le but de pouvoir permettre à ses utilisateurs la location de divers locaux.


## Partie User

Un utilisateur peut, en étant connecté, choisir un ou des locaux, les louer en prenant ou non des options (telles qu'un fauteuil massant), jusqu'à la date de son choix et valider le tout en payant.

Lorqu'il a payé, il peut, s'il le désire, télécharger sa facture et y avoir accès.

Il peut également avoir accès à son profil pour le modifier, et voir l'ensemble des locaux disponibles en fonction des villes. Si un local est réservé, il ne s'affiche pas, et si une ville est ajoutée ou enlevée, des offres peuvent apparaître ou disparaître en conséquence.


## Partie Admin 

L'Admin, lui peut avoir accès à un back office où il peut avoir accès à :
- L'ensemble des users
- L'ensemble des locaux
- L'ensemble des villes
- L'ensemble des modules
- Gestion des rates des niveaux, des types de locaux et des pourcentages de réduction de prix

Il peut intéragir comme bon lui semble, en créant, modifiant et supprimant ce qu'il veut (sauf son compte, parce qu'un admin connecté verra le bouton "Supprimer" de son compte en disabled, pour ne pas qu'il se supprime lui-même) et peut donc avoir un oeil sur tout ce qu'il désire.



## Explication des tâches

- Antony : Il a travaillé sur le back-end. Avec Dinh, ils ont monté la base de données, fais les migrations et les seeders. Il a aussi et surtout travailler sur la partie "Administration", en mettant les routes sur les boutons, et en faisant le CRUD de ces différentes parties (comme les "Users", les "Modules", etc...). Ils ont également lié les informations entre le back-end et le front-end.

- Dinh : En tant que lead back-end, il a monté avec Antony la base de données avec les seeders et les migrations et a travaillé aussi sur la partie "Administration". Il a lié également les locaux avec les bonnes informations, avec les bons modules et s'est occupé du sytème de location et du système de facturation. Il a aussi contribué à mettre des routes spécifiques pour les admins et a aussi créé un middleware prévu à cet effet.

- Dylan : Il a travaillé sur la partie front-end. Avec Patrice, Ils ont créé les vues et préparé les données entre le back-end et le front-end. Ils ont implémenté des templates et ont travaillé sur l'implémentation de leurs vues. Il s'est également occupé de la partie création de la facturation. Il a également ajouté quelques détails, comme le fait qu'un admin ne peut pas supprimer son compte.

- Patrice : Le lead front-end. Il a aidé Dylan dans l'implémentation des vues et a aussi travaillé sur les détails du site, qui font qu'il est propre et soigné. Il s'est également occupé des templates et a aidé à créer des vues bien organisées, dans des dossiers différents. Il s'est chargé de créer la partie "Administration", en créant une apparence tout autre que celle du template de base.