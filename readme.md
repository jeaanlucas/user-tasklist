## User Tasklist - Back End
#### How to install?

Easy!

Install [docker](https://goo.gl/JmnqnK).

Now [docker compose](https://goo.gl/nzcP7q).

Then, in the project execute the command (*this guy will up one container with PHP and MySql locally*):
```
docker-compose up -d
```
Now enter inside your PHP image using that command:
```
docker-compose exec app bash
```
Then, execute the composer to install all dependencies and execute the migrations to create all tables inside your database:
```
composer install
php artisan migrate:fresh --seed
```
The magic is done!

The API will be running locally using port 8081 (*localhost:8081/*).

One user is already created. He has a login and password:

**E-mail** - *adm@userstasks.com*

**Password** - *adm@123*

*ALL CONTAINER INFORMATIONS ARE INSIDE THE ARCHIVE* **docker-compose.yml** *IN THE PROJECT ROOT*
