
## User Tasklist - Back End
#### How to install?

Easy!

Install [docker](https://goo.gl/JmnqnK).

Now, [docker compose](https://goo.gl/nzcP7q).

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

## API - Documentation Table
### Login
| NAME | HTTP | URL | BODY |
|------|------|-----|------|
| Login | POST | /api/login | `{"email", "password"}` |

### Users
| NAME | HTTP | URL | BODY |
|------|------|-----|------|
| Create User | POST | /api/users | `{"name", "email", "cellphone", "birthday", "password"}` |
| Return all Users | GET | /api/users ||
| Return information from a specified User | GET | /api/users/:user ||
| Edit information from a specified User | PUT | /api/users/:user |`{"name", "email", "cellphone", "birthday", "password"}`|
| Delete an User | DELETE | /api/users/:user ||

### Tasks
| NAME | HTTP | URL | BODY |
|------|------|-----|------|
| Create Task | POST | /api/tasks | `{"title", "status", "description"}` |
| Return all Tasks | GET | /api/tasks ||
| Return information from a specified Task | GET | /api/tasks/:task ||
| Edit information from a specified Task | PUT | /api/tasks/:task |`{"title", "status", "description"}`|
| Delete a Task | DELETE | /api/tasks/:task ||
