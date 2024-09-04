SHIFT
## About Laravel

Shift is a simple car blog website with the following features: 
- user can login and create new account. 
- user can view featured and related articles about cars. 
- create a new post when signed-in.
- update and delete post created by the user/author.

## Installation

1. Install Laravel Herd using this website url.
    https://herd.laravel.com/

2. Go to your User/Herd directory and paste the project folder.
    \User\Herd\shift

3. Run 'npm install' command inside :\User\Herd\shift directory.

## Data Migrations and Seeding

Table Plus is the software used for database management of this application. Shift used SQLite. 

1. Install Table Plus using this website url.
    https://tableplus.com/

2. Add new connection using SQLite and select SQLite database file inside project directory.
    :\User\Herd\shift\database

3. Test the connection if working.

4. Run the following commands for database migration and seeding.
    'php artisan migrate:fresh --seed'

5. Run 'npm run dev' to use vite.

6. Finally go to your browser and type app url: 'http:shift.test'

## Packages Used

1. Tailwind CSS - https://tailwindcss.com/

2. Vite - https://vitejs.dev/

## End of Shift's README

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
