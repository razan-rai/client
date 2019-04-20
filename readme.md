Clone GitHub repo:

git clone git@github.com:razan-rai/client.git
cd into your project:
move the  terminal into working location 

Install Composer Dependencies:
	composer install
Install NPM Dependencies:
	npm install
Create a copy of your .env file:
	cp .env.example .env
Generate an app encryption key:
	php artisan key:generate
Create an empty database for our application:
	Just create an empty database
In the .env file, add database information to allow Laravel to connect to the database:
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.
Example:
UNIX_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
DB_CONNECTION=mysql
DB_HOST=localhost:8888
DB_PORT=3306
DB_DATABASE=client_section
DB_USERNAME=root
DB_PASSWORD=root
Migrate the database:
Once credentials are in the .env file, now we can migrate your database.
php artisan migrate

Finnaly Run:
php artisan serve
#####we can now access project :)
