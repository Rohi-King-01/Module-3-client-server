<?php
require_once __DIR__ . '/../app/StudentService.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed. Submit the registration form first.');
}

$name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$course = trim($_POST['course'] ?? '');

if ($name === '' || $email === '' || $course === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../index.php?status=error&message=' . urlencode('Please enter a valid name, email and course.'));
    exit;
}

try {
    $service = new StudentService();
    $service->register($name, $email, $course);
    header('Location: ../index.php?status=success&message=' . urlencode('Success! The server received your details and saved the student in MySQL.'));
    exit;
} catch (PDOException $e) {
    error_log($e->getMessage());
    header('Location: ../index.php?status=error&message=' . urlencode('Database error. Check that MySQL is running and the database has been created.'));
    exit;
} catch (InvalidArgumentException $e) {
    header('Location: ../index.php?status=error&message=' . urlencode($e->getMessage()));
    exit;
}
