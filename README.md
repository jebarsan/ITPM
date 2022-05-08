Step 1: Clone file

Step 2: Installed the composer and the Laravel dependencies
Next, You need to install first the Composer and the Laravel libraries.

Step 3: Open Command Prompt
Next, go to the project folder directory then type CMD to open the command prompt.

Step 4: Composer Update
Next, After you finish to installed the composer and the Laravel. now type “composer update –no-scripts” in your command prompt to install the composer dependencies.

Step 5: php artisan key:generate
Next, then type “php artisan key:generate ” in your command prompt. A command that sets the APP_KEY value in your . env file. By default, Run the following command to have the database tables migrated for you so that you can begin using the system.

Step 6: Create Database       database name = "hospitaldb"
To install and run the application correctly. Simply go to phpmyadmin and make a new database. After that, “Be” and rename it to “.env“, then go to connection and modify the default database connection name, only database connection, database username, and password.

Step 7: php artisan migrate
After you’ve set up the environment, you’ll need to establish a database configuration for it. Use the following command to create database tables: “php artisan migrate“.

Step 8: php artisan serve   
Lastly, type “php artisan serve” in your command prompt. The purpose of using PHP artisan serve (PHP built in server) is just for testing and easy starting your project it should not be used in real website deployment.

Step 9: Copy “http://127.0.0.1:8000/”
In your browser, type the following code to access your project dashboard.