<h1>Important Instructions</h1>
Clone Repository
In order to run this application you need to clone it, run the following command in order to clone it:-

git clone https://github.com/aqibjaved00002/mini-crm-project.git

Setup .env file for Database & Mailing server
It is important to setup .env file:-

Setup .env file according to your database. It is important to note that this applicaton contain sending an email functionality when admin create company, so it is important to setup mailing server (mailtrap.io) in .env file enter your mailtrap.io credentials, also change email address written in store method of CompaniesController. It is important to do these steps otherwise you will get an error message, and will not be able to use application.

Migrate all migrations into database
Run all the migrations by using the following command: php artisan migrate

Run Database seeder
Run Database seeder by using the following command: php artisan db:seed (it is important to run for login as admin)

Credentials for login as admin:-
Email: admin@admin.com

Password: password

You are good to go...