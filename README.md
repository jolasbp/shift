SHIFT
## About Laravel

Shift is a simple car blog website with the following features: 
- user can login and create new account. 
- user can view featured and related articles about cars. 
- create a new post when signed-in.
- update and delete post created by the user/author.

## Installation

1. Run 'npm install' command inside project directory.

2. Run 'composer install'.

3. Make a copy of .env from .env.example inside project directory.

4. Run application using 'php artisan serve' or 'npm run dev' on another terminal.

## Data Migrations and Seeding

Shift used SQLite. 

1. You need to generate a key using the command 'php artisan key:generate' inside project's directory.

3. Run the following commands for database migration and seeding.
    'php artisan migrate:fresh --seed'

## Packages Used

1. Tailwind CSS - https://tailwindcss.com/

2. Vite - https://vitejs.dev/


