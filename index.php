<?php
/**
 * Created by PhpStorm.
 * User: Skuggan-lokal
 * Date: 2018-08-22
 * Time: 06:07
 */


class Database extends PDO {

    public function __construct() {

        $host = 'localhost';
        $db_name = ;
        $;
        $;
        $options = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        );


        parent::__construct($dsn, $username, $passwd, $options);
    }
}
$db = new Database;