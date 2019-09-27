# syssr

## Prerequisites to run the project
 1. `PHP 7.3.9` (for back-end) & `MySQL` (for database), you can download any program (xampp, wampp, laragon ...) can provide that or this direct link for [xampp](https://www.apachefriends.org/download.html)
 2. [Composer](https://getcomposer.org/) for running some commands later

## First Pull
 1. Create database with the name `syssr_db`
 2. Install on your machine [Composer](https://getcomposer.org/) if not exist.
 3. Open in each folder [cms, website] the cmd or terminal and execute the following commands:
    - `Composer install`
    - `cp .env.example .env`
    - `php artisan key:generate`
 4. Also in each folder, open `.env` file and edit the following: 
 	- `DB_DATABASE=syssr_db`
	- `DB_USERNAME=root`
	- `DB_PASSWORD=`
 5. Execute in [cms] folder by (cmd or terminal) the command  `php artisan module:migrate:refresh`
 5. Execute in [website] folder by (cmd or terminal) the command  `php artisan migrate`

## Run the project
 - Run (xampp, wampp or any program for [Apache & MySQL])
 - Then open the following URLs:
   - [CMS](http://localhost/MNV/syssr/cms/public/en/login)
   - [Website](http://localhost/MNV/syssr/website/public/en/login)

## Steps every pull
Open in each folder [cms, website] the cmd or terminal and execute the following commands:
 1. Execute in [cms] folder by (cmd or terminal) the commands: 
   - `php artisan module:migrate-refresh`
   - `Composer update`
 2. Execute in [website] folder by (cmd or terminal) the commands:
   - `php artisan migrate`
   - `Composer update`

## CMS login info
 - Username: **admin**
 - Password: **admin**
