<h1>Important Instructions</h1>
<h5><u>Clone Repository</u></h5>
<p>In order to run this application you need to clone it, run the following command in order to clone it:-</p>
<p><b>git clone https://github.com/aqibjaved00002/mini-crm-project.git</b></p>
<h5><u>Setup .env file for Database & Mailing server</u></h5>
<p>It is important to setup .env file:-</p>
<p>Setup .env file according to your database. It is important to note that this applicaton contain sending an email functionality when admin create company, so it is important to setup mailing server (mailtrap.io) in .env file enter your mailtrap.io credentials, also change email address written in store method of CompaniesController. It is important to do these steps otherwise you will get an error message, and will not be able to use application.</p>
<h5>Migrate all migrations into database</h5>
<p>Run all the migrations by using the following command: php artisan migrate</p>
<h5>Run Database seeder</h5>
<p>Run Database seeder by using the following command: php artisan db:seed (it is important to run for login as admin)</p>
<p>It is important to setup .env file:-</p>
<h5>Credentials for login as admin:-</h5>
<p>Email: admin@admin.com</p>
<p>Password: password</p>
<p>You are good to go...</p>
