<?php
require_once __DIR__ . '/Database.php';

class StudentRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    // Data access layer: SQL operations are kept separate from business logic.
    public function create(string $name, string $email, string $course): void
    {
        $sql = 'INSERT INTO students (full_name, email, course) VALUES (:name, :email, :course)';
        $statement = $this->db->prepare($sql);
        $statement->execute([
            ':name' => $name,
            ':email' => $email,
            ':course' => $course,
        ]);
    }

    public function getAll(): array
    {
        return $this->db->query('SELECT id, full_name, email, course, created_at FROM students ORDER BY id DESC')->fetchAll();
    }
}
