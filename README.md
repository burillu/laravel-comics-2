<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installazione Laravel

```bash
cd your parent_folder_path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c

```
## Configurazione Laravel
```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont e se voglio la rinomino

#installo dbal per migration e seeder
composer require doctrine/dbal


#comandi git

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url 
git push -u origin main


```
## Clono progetto da github 

```bash
# copio file .env.example e lo rinomino in .env

composer install

php artisan key:generate

npm install


# creo il database da phpmyadmin

# inserisco i dati per il collegamento al db in env


# creo migration

php artisan make:migration create_{nome_tabella}_table 
php artisan make:migration update_users_table --table=users
php artisan make:migration add_phone_number_to_users_table  

#lanciare migration
php artisan migrate

#revert migration
php artisan migrate:rollback


#popolare il db
php artisan make:seeder UsersTableSeeder

php artisan db:seed --class=UsersTableSeeder

# preparo le rotte file web.php es. 
Route::get('/books', [PageController::class, 'index'])->name('page.index');

#per verificare le routes esistenti escludendo quelle del vendor:

php artisan route:list --except-vendor

# creo controller
php artisan make:controller NomeController

#creo model
php artisan make:model Nome
# potrei creare il model con aggiunta di risorse control, migration e seeder e form request per le validazioni col seguente comando:
php artisan make:model Nome -rcms --request

# creo le views relative

#creo form request per validazione:

php artisan make:request StoreNomeModelRequest

```
## Descrizione:

### Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e seeder e resource controller.
Editate la resource route
### Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view dove necessarie:
- index()
- show()
- create()
- store() (solo dump dei dati)

### Milestone 3
Completare le operazioni CRUD.

### Milestone 4

Sempre lavorando sulla repo di ieri, potete aggiungere le validazioni in modo da rendere più stabile il vostro gestionale di fumetti. 
- Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.



### Bonus:
- Procedere con il salvataggio dei dati sul db
- Aggiungere validazioni e messaggi di errore e alla cancellazione messaggio di conferma all'utente
- utilizzare le Request personalizzate per validare i dati
- aggiungere conferma alla cancellazione degli elementi
- aggiungere un filtro a vostra scelta per i dati dei comics