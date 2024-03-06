git clone https://github.com/ppranav164/lunar-commerce-demo.git

cd lunar-commerce-demo

Then install composer dependencies

composer install
Configure the Laravel app
Copy the .env.example file to .env and make sure the details match to your install.

cp .env.example .env
All the relevant configuration files should be present in the repo.

Migrate and seed
Run the migrations

php artisan migrate
Install Lunar

php artisan lunar:install
Seed the demo data.

php artisan db:seed
Link the storage directory

php artisan storage:link
