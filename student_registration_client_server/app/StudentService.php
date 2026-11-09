<?php
require_once __DIR__ . '/../data/StudentRepository.php';

class StudentService
{
    private StudentRepository $students;

    public function __construct()
    {
        $this->students = new StudentRepository();
    }

    // Business logic layer: validate and coordinate registration.
    public function register(string $name, string $email, string $course): void
    {
        if (strlen($name) < 2 || strlen($course) < 2) {
            throw new InvalidArgumentException('Name and course must contain at least 2 characters.');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Please provide a valid email address.');
        }
        $this->students->create($name, $email, $course);
    }

    public function all(): array
    {
        return $this->students->getAll();
    }
}
