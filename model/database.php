<?php
class Database {
    private static $dsn = 'mysql:host=sql1.njit.edu;dbname=rmr29';
    private static $username = 'rmr29';
    private static $password = 'UEF6rZEE4';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
