#Install

Run composer install:

    composer install

Setup your environment:
   - rename .env.example file to .env
  

Bootstrap the application:

    php artisan migrate
    php artisan db:seed
    php artisan db:seed --class=CompaniesLicencesTableSeeder
   
   
   
