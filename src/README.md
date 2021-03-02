<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About this repository
This repository is a boilerplate for a standard Laravel project. It has alread configured Fortify package, phpunit, xdebug, powershell scripts and code coverage tester.

## Usage
### Install everything
The laravel.ps1 script is able to check your enviroment for prerequisites and install the missing components. This also:
- Install composer packages
- Install npm packagages (with yarn)
- Copy the `.env.example` to `.env`
- Run migrations
- Run seeders
- Compile scss files
- Compile js file

>**Please make sure to create a database with the name defined in `.env.example`. Later you can rename it.**

> Note: To run ps1 scripts you need to [Allow powershell script execution](#allow-powershell-script-execution)

While in the laravel root folder (src) run the following:
```ps
./laravel.ps1 init
```

Run this command every day, just after pulling the latest changes of Your repository.

### Regenerate your database
When you edit your migrations you can re-migrate everything and run the seeders with the following command:

```ps
php artisan migrate:fresh --seed
# Or:
./laravel.ps1 db
```

### Compile sass and js files
To compile your resources in to a single app.css and app.js you can run:
```ps
yarn run development
# Or:
./laravel.ps1 compile
# Or:
./laravel.ps1 c
```

### Running tests
To run every test in `Tests` folder and create the code coverage report you can run:
```ps
./vendor/bin/phpunit --coverage-html tests/Coverage
#Then manually open the coverage report in ./tests/Coverage/index.html
# Or:
./laravel.ps1 test
# Or:
./laravel.ps1 t
```

## Prerequisites
This boilerplate needs the following:
- [(XAMPP recommended)](https://www.apachefriends.org/index.html)
- php 8.0+ with xdebug extension
- [composer](https://getcomposer.org/)
- [node.js](https://nodejs.org/en/)
- [yarn](https://yarnpkg.com/getting-started/install)

### Allow powershell script execution
By default PowerShell does not allow script execution because security reasons. However if you would like to use my scripts, you have to allow it.
Open powershell as administrator and paste the following code:

```ps
set-executionpolicy unrestricted
```
And voile, now you can use any .ps1 script.

### Using Chocolatey
When developing on windows, I strongly recomend using [Chocolatey](https://chocolatey.org/) as your package manager. This way you can ensure you are using the latest version of everything.

If you don't have Chocolatey installed, `./laravel.ps1 init` installs EVERY required app including Chocolatey.

### Install XDebug
On windows, open a new powershell, and execute this code:
```ps
php -i | clip ; Start-Process https://xdebug.org/wizard
```
This command already copied php info to your clipboard. Now paste it in the textbox, click "analyse" and follow the instructions.

On Linux or mac go to https://xdebug.org/ and follow the instructions there.

---
---
---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
