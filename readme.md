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

Si tu as des erreurs sur le ```php artisan db:seed```, fait un ```composer dump-autoload``` et reprend avec ```php artisan migrate:refresh```

Si tu as des erreurs pendant le ```npm install```, essaye d'installer ce paquet sur ta machine :
```sudo apt-get install build-essential```

### Extension php à installer



### Commande de compilations :

- ```npm run watch-poll``` : Permet de réécrire le sass en direct
- ```npm run dev``` : Permet de compiler le sass en css

