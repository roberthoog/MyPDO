// Show all errors. Remove for production
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$type ='mysql';
$host = 'localhost';
$db_name ="pdo_test" ;
$username ="root";
$password ="r00t";
$db_charset ='utf8';
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES   => false,
