<?php
$message = $_GET['message'] ?? '';
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration | Client</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <main class="container">
    <section class="card">
      <h1>Student Registration</h1>
      <p class="intro">Client-side registration form communicating with a PHP server.</p>

      <?php if ($message): ?>
        <div class="notice <?= htmlspecialchars($status) ?>"><?= htmlspecialchars($message) ?></div>
      <?php endif; ?>

      <form action="server/submit.php" method="POST">
        <label for="full_name">Full name</label>
        <input id="full_name" name="full_name" type="text" maxlength="100" required placeholder="e.g. Jane Wanjiku">

        <label for="email">Email address</label>
        <input id="email" name="email" type="email" maxlength="150" required placeholder="jane@example.com">

        <label for="course">Course</label>
        <input id="course" name="course" type="text" maxlength="100" required placeholder="e.g. Information Technology">

        <button type="submit">Register student</button>
      </form>
      <p class="small">The browser sends the form to the PHP server using an HTTP POST request.</p>
      <a href="students.php">View registered students</a>
    </section>
  </main>
</body>
</html>
