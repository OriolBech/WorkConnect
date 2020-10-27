# WorkConnect

WorkConnect is a platform for managing employees and ensuring that employees are aware of everything that involves them in their work.

  - Event Calendar
  - System manage employees
  - System for requesting days off
  - Consult the payroll
  - Timetables
  - Chat between employees and their bosses.

### Why use it?

  The objective of this software is that you can have all the issues regarding work in one single application, without having to use your personal whatsapp or use other applications that compromise your personal life.

### Requirements

  - Composer
  - PHP >= 7.3

### Intallation

First of all git clone this repository in your project folder :
  ```sh
$ git clone https://github.com/OriolBech/workconnect.git
```

Then installs the composer dependencies:
```sh
$ composer install
```

Finally configure your .env file, copy .env.example to .env, and set up your db.

For up your app you have to migrate the tables and put some data.

```sh
$ php artisan migrate
```
```sh
$ php artisan db:seed
```
```sh
$ php artisan serve
```

License
----

MIT
