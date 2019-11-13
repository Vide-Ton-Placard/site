# site

After cloning the project :

1. Install composer by running the command : ```site> composer install```
2. Copy and paste the file .env then rename it as .env.local and modify ```db_user``` & ```db_password``` on line 28 : 
```DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/vide_ton_placard```
3. Run the command to clear the cache : ```site> php bin/console cache:clear```
4. Then you might need to regenerate the list of all classes that need to be included in the project : 
```site> composer dump-autoload```
5. Create the database : ```site> php bin/console doctrine:database:create```
6. Create the database migration : ```site> php bin/console make:migration```
5. Make the migration to database : ```site> php bin/console doctrine:migrations:migrate```
5. Launch server ang go to http://127.0.0.1:8000/: ```site> symfony server:start```

***

Une fois le projet cloné :

1. Installer composer avec la commande : ```site> composer install```
2. Copier et coller le fichier .env puis le renommer en .env.local et modifier ```db_user``` & ```db_password``` à la ligne 28 : 
```DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/vide_ton_placard```
3. Lancer la commande pour nettoyer le cache : ```site> php bin/console cache:clear```
4. Ensuite vous aurez peut-être besoin de régénérer la liste des classes qui doivent être incluses dans le projet : 
```site> composer dump-autoload```
5. Crééz la base de données : ```site> php bin/console doctrine:database:create```
6. Crééz la migration de la base de données : ```site> php bin/console make:migration```
5. Lancez la migration vers la base de données : ```site> php bin/console doctrine:migrations:migrate```
5. Lancez le serveur puis rendez-vous sur http://127.0.0.1:8000/: ```site> symfony server:start```
