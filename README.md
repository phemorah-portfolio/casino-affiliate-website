## Follow this guide for easy installation of this project

1. - Clone or download the casino-affiliate-website on your localhost

2. - Run this command to generate an application key - "php artisan key:generate"

3. - Rename the .env.example file inside the laravel project root directory to .env 

4. - Delete the following lines from the new .env file
    - **DB_DATABASE=laravel**
    - **DB_USERNAME=root**
    - **DB_PASSWORD=**
 
5 - Change the DB_CONNECTION value from sql to sqlite
    - **Example: change DB_CONNECTION=sql to DB_CONNECTION=sqlite**

6. - Run this command to auto generate your application key in .env php artisan key:generate

7. - Create a new database.sqlite file inside the database folder

8. - run composer update to update laravel dependendencies and packages

9. - php artisan serve to start laravel server

10. - Run npm install to install your node modules and packages

Goodluck!!