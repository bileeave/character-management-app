# Character Management App

A simple management app to manage and categorize your character ideas.

### Prerequisites

- PHP 8.2 or higher
- [Laravel 11](https://github.com/laravel/laravel/tree/11.x)
- [Composer](https://getcomposer.org/)
- [Docker](https://laravel.com/docs/installation#docker-installation-using-sail) container or with PHP development stack - here's my [guide](https://gist.github.com/bileeave/14f9eca3dfe65bbb7ea4bca52fab0a84) in setting up PHP development stack with XAMPP

### Installing

- Clone the repository
- Rename `.env.example` to `.env`
- Uncomment database environment variables in `.env` and provide values if necessary
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate:install`
- Run `php artisan db:seed`
- Run `php artisan serve`

## Built With

* [Laravel 11](https://laravel.com/docs/11.x/releases) - PHP web framework
* [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze) - Laravel Breeze stack with Blade
* [PHPUnit](https://laravel.com/docs/testing#main-content) - Testing framework
* [XAMPP](https://www.apachefriends.org/) - PHP development environment
* [SQLite](https://laravel.com/docs/database#sqlite-configuration) - Database
* [Bootstrap](https://getbootstrap.com/) - CSS Framework, using v5.3
* [Bootstrap Icons](https://icons.getbootstrap.com/) - Library of SVG icons
* [Bootswatch](https://bootswatch.com/) - Free themes for Bootstrap, using [Minty](https://bootswatch.com/minty/)
* [Jasny Bootstrap](https://www.jasny.net/bootstrap/) - Bootstrap extension, applied to file input in profile

## License

Feel free to use. Project licensed under the [MIT License](LICENSE.md).

## Note

The `README.md`, `NOTES.md`, and `/TEMPLATES` are intentionally set to UPPERCASE to distinguish them from the app development. :)