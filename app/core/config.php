<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    //database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/testMVC/public');
} else {
    //database config
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'root');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.yourwebsite.com/MVC/public');
}

define('APP_NAME', 'My website');
define('APP_DESC', 'Best website on the planet :p');

/** true means show errors */
define('DEBUG', true);
