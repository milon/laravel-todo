# Laravel ToDo App

This is a simple ToDo app with multiple user support.

This is built on Laravel Framework 5.1. This was built for demonstrate purpose.

## Installation

Clone the repository-
```
git clone https://github.com/milon521/laravel-todo.git
```

Then cd into the folder with this command-
```
cd laravel-todo
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todos` and then do a database migration using this command-
```
php artisan migrate
```

Then change permission of storage folder using thins command-
```
(sudo) chmod 777 -R storage
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Ask a question?

If you have any query please contact at milon521@gmail.com

## Screenshot

![Landing Page](/screenshots/1.png)
![Sign In Page](/screenshots/2.png)
![Registration Page](/screenshots/3.png)
![ToDo List Page](/screenshots/4.png)
![Create New ToDo Page](/screenshots/5.png)
![User Profile Page](/screenshots/6.png)
