<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "IgualdadeGenero";
    private static $user = "root";
    private static $pass = "";
    private $conn;

    public static function connect() {
        try {
            $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }
}
?>
