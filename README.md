### OOP Project Manager

#### Task:
Create Project Manager using OOP PHP, ORM, Composer, MVC Architecture.

#### Features:
* Browse Employees or Projects lists
* Create, read, update, delete Projects
* Create, read, update, delete Employees

#### Setup:
1. Clone the repository https://github.com/giezele/Sprint3
2. Edit bootstrap.php file with your SQL credentials 
```
    'user'     => 'user name',
    'password' => 'your password'
```
Make sure you define a path to app's directory (or just leave it this way if git-cloned my repo to Ampps/www/Sprint3 directory)
```
define('ROOT_PATH', '/Sprint3');
``` 
3. Install PHP Doctrine ORM inside the project directory before using this app:

    3.1 open CLI inside the project directory;

    3.2 run command: `php composer.phar install`. 

4. Run sprint3.sql on your MySQL Workbench. Execute the script. New DB `sprint3` containing tables `employees` and `projects` is now created.
5. On CLI run `vendor/bin/doctrine orm:schema-tool:update --force --dump-sql` (if you use git bash / mac / linux terminals) or `vendor\bin\doctrine orm:schema-tool:update --force --dump-sql` (if you use windows)
6. Open http://localhost/Sprint3/ in your browser.
