# site

**Une fois le projet cloné :**

1. Installer composer avec la commande : ```> composer install```
2. Copier et coller le fichier .env puis le renommer en .env.local et modifier ```db_user``` & ```db_password``` à la ligne 28 : 
```DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/vide_ton_placard```
3. Lancer la commande pour nettoyer le cache : ```> php bin/console cache:clear```
4. Ensuite vous aurez peut-être besoin de régénérer la liste des classes qui doivent être incluses dans le projet : 
```> composer dump-autoload```
5. Crééz la base de données : ```> php bin/console doctrine:database:create```
6. Lancez la migration vers la base de données : ```> php bin/console doctrine:migrations:migrate```
7. Lancez le serveur puis rendez-vous sur http://127.0.0.1:8000/: ```> symfony server:start```

**Dans un autre terminal :**

1. Lancez la commande : ```> npm install```
2. Puis pour compiler le scss : ```> npm run watch```

***

**After cloning the project :**

1. Install composer by running the command : ```> composer install```
2. Copy and paste the file .env then rename it as .env.local and modify ```db_user``` & ```db_password``` on line 28 : 
```DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/vide_ton_placard```
3. Run the command to clear the cache : ```> php bin/console cache:clear```
4. Then you might need to regenerate the list of all classes that need to be included in the project : 
```> composer dump-autoload```
5. Create the database : ```> php bin/console doctrine:database:create```
6. Make the migration to database : ```> php bin/console doctrine:migrations:migrate```
7. Launch server ang go to http://127.0.0.1:8000/: ```> symfony server:start```

**In another terminal :**

1. Run : ```> npm install```
2. Then for scss compiler : ```> npm run watch```
