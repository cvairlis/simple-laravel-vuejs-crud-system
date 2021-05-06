<p align="center"><a href="https://github.com/cvairlis/simple-laravel-vuejs-crud-system" target="_blank"><img src="https://lh6.googleusercontent.com/6xXyOQ7cEW8UqC9XpNC-jF2yELWLFGvIRruGMGCj_QdaEAjIW1ip6c_zID-kzu9KPPgSOQBXjD9ShfVUHqMV=w1920-h981-rw" width="400"></a></p>

## About The Application

The Simple Laravel VueJS crud system is essentially what is called. It is a CRUD system using these technologies. More specifically:

It consists of 2 major entities: the Users and the Departments.

In Users table we have a column departments to keep the departments that a user have enrolled in a comma separated value way.

Users and Departments have between them a many to many relation.

We used various technologies:

#### [Laravel & Blade](https://laravel.com/)
#### [Vue.js](https://vuejs.org/)
#### [Tailwind CSS](https://tailwindcss.com/)
#### [Bootstrap](https://getbootstrap.com/)
#### [Vue Router](https://router.vuejs.org/)
#### [Laravel Vue Pagination](https://github.com/gilbitron/laravel-vue-pagination)
#### [Vue Multiselect](https://vue-multiselect.js.org/)

## .
## Installation

1. `git clone git@github.com:cvairlis/simple-laravel-vuejs-crud-system.git`
2. `cd simple-laravel-vuejs-crud-system`
3. `composer install`
4. `nvm install 12.14.1`

   `nvm use`

   `npm install`

   `npm run dev`

5. Create a copy of `.env.example`  file with name `.env`  and paste the following:
~~~~
APP_NAME="Simple Laravel Vue JS CRUD System"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://simple-laravel-vuejs-crud-system.local

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple-laravel-vuejs-crud-system
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
~~~~
6. Run `php artisan key:generate`
7. Create a database:

   Name: `simple-laravel-vuejs-crud-system`

   Charset: `utf8mb4`

   Collation: `utf8mb4_unicode_ci`
8. Run `php artisan migrate`
9. Free the storage folder permissions with all permissions on linux (be carefull with this): `sudo chmod -R 777 storage/`
10. You can run the following command to seed the database with Users and Departments. This will not create the relations only records in the tables.

    `php artisan db:seed`
11. Create a virtual host for the application and visit via browser:

    http://simple-laravel-vuejs-crud-system.local/

12. Enjoy
## License

This app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
