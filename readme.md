# Installation pour developpement :

```
cp .env.example .env
composer install
npm install
php artisan key:g
npm run dev
```

Si tu as des erreurs pendant le ```npm install```, essaye d'installer ce paquet sur ta machine :
```sudo apt-get install build-essential```

### Commande de compilations :

```npm run watch-poll``` : Permet de réécrire le sass en direct
```npm run dev``` : Permet de compiler le sass en css

