<?php
require_once __DIR__ . '/app/StudentService.php';
try {
    $students = (new StudentService())->all();
} catch (PDOException $e) {
    $students = [];
    $error = 'Could not connect to the database. Import database.sql and check that MySQL is running.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered Students</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <main class="container">
    <section class="card wide">
      <h1>Registered Students</h1>
      <p class="intro">Records returned from the MySQL database through the PHP server.</p>
      <?php if (isset($error)): ?>
        <div class="notice error"><?= htmlspecialchars($error) ?></div>
      <?php elseif (!$students): ?>
        <p>No students registered yet. Add one using the registration form.</p>
      <?php else: ?>
        <div class="table-wrap"><table>
          <thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Registered</th></tr></thead>
          <tbody>
          <?php foreach ($students as $student): ?>
            <tr>
              <td><?= htmlspecialchars((string)$student['id']) ?></td>
              <td><?= htmlspecialchars($student['full_name']) ?></td>
              <td><?= htmlspecialchars($student['email']) ?></td>
              <td><?= htmlspecialchars($student['course']) ?></td>
              <td><?= htmlspecialchars($student['created_at']) ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table></div>
      <?php endif; ?>
      <a href="index.php">Back to registration form</a>
    </section>
  </main>
</body>
</html>
