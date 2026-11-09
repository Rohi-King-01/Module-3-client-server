<?php
class Database
{
    public static function connect(): PDO
    {
        $host = '127.0.0.1';
        $database = 'student_registration';
        $username = 'root';
        $password = ''; // Default XAMPP MySQL password is usually blank.

        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
        return new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
}
