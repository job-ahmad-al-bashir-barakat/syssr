# syssr

## First Pull
 1. Create database with the name `syssr_db`
 2. Install on your machine [Composer](https://getcomposer.org/) if not exist.
 3. Open in each folder [cms, website] the cmd or terminal and execute the following commands:
    - `Composer install`
    - `cp .env.example .env`
    - `php artisan key:generate`
 4. Open `.env` file and edit the following: 
 	- `DB_DATABASE=syssr_db`
	- `DB_USERNAME=root`
	- `DB_PASSWORD=`
 5. execute `php artisan module:migrate`

## Steps every pull
Open in each folder [cms, website] the cmd or terminal and execute the following commands:
 1. execute `Composer update`
 2. execute `php artisan module:migrate`

## CMS login info
 - Username: **admin**
 - Password: **admin**
