		/*
DB-connection august 2018
*/
<?php 
class Database extends PDO {

	public function __construct() {
		$type ='mysql';
		$host = 'localhost';
		$db_name ="pdo_test" ;
		$username ="root";
		$password ="r00t";
		$options = array(
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
		PDO::ATTR_EMULATE_PREPARES   => false,
	);
	parent::__construct($type . ':host='.$host.';dbname='.$db_name, $username, $password, $options);
	
	}
}
