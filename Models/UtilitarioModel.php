<?php

class UtilitarioModel
{
    private static $host = '127.0.0.1';
    private static $user = 'root';
    private static $pass = '';
    private static $db = 'practicas13';
    private static $port = 3307;

    public static function OpenDatabase()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $conn = mysqli_connect(self::$host, self::$user, self::$pass, self::$db, self::$port);
            return $conn;
        } catch (Exception $e) {
            // Log error instead of exposing it
            error_log('Database connection failed: ' . $e->getMessage());
            return null;
        }
    }

    public static function CloseDatabase($context)
    {
        if ($context) {
            mysqli_close($context);
        }
    }
}