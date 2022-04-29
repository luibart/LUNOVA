<?php
if (file_exists('config.inc.php'))
{
    require_once 'config.inc.php';
}
    class FDb
    {
        /** Istanza della classe */
        //private static FDb $instance;

        /** Oggetto PDO che effettua la connessione al DB */
        private PDO $db;

        private function __construct()
        {
            $host = "localhost";
            $database = $GLOBALS['database'];
            $username = $GLOBALS['username'];
            $password = $GLOBALS['password'];

            try {
                $this->db = new PDO("mysql:host=$host; dbname=$database", $username, $password);
            } catch (PDOException $e) {
                echo "!ERRORE!" . $e->getMessage();
                die;
            }
        }
    }