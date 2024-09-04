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


