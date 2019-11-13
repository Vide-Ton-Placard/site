# site

After cloning the project :

1. Run the command : ```> composer install```
2. Create a new file at the root of the project (.env.local) and modify ```db_user``` & ```db_password``` on line 28 : 
```DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/vide_ton_placard```
3. Run the command : ```> php bin/console doctrine:database:create```
