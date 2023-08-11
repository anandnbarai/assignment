Q-1: How to do config database in laravel?

Laravel makes connecting with databases and running queries extremely simple. The database configuration file is
app/config/database.php. In this file you may define all of your database connections, as well as specify which
connection should be used by default. Examples for all of the supported database systems are provided in this
file.Currently Laravel supports four database systems: MySQL, Postgres, SQLite, and SQL Server.

Q-2: Call MySQLi Store Procedure from Laravel ?

$procedure = "DROP PROCEDURE IF EXISTS `get_posts_by_userid`;
CREATE PROCEDURE `get_posts_by_userid` (IN idx int)
BEGIN
SELECT * FROM posts WHERE user_id = idx;
END;";

\DB::unprepared($procedure);

Route::get('call-procedure', function () {

$postId = 1;
$getPost = DB::select(
'CALL get_posts_by_userid('.$postId.')'
);

dd($getPost);

});

Q-4: Create All Migration for Employee management
To generate a migration you need run a command
php artisan make:migration create_employee_table