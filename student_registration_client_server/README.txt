STUDENT REGISTRATION CLIENT-SERVER APPLICATION (XAMPP)

REQUIREMENTS
- XAMPP with Apache, PHP and MySQL
- A web browser

INSTALLATION
1. Extract the folder "student_registration_client_server" into:
   C:\xampp\htdocs\
2. Open XAMPP Control Panel.
3. Start Apache and MySQL.
4. Open phpMyAdmin at http://localhost/phpmyadmin
5. Select the Import tab, choose database.sql from this project, and click Import.
   Alternatively, open the SQL tab and run the contents of database.sql.
6. Open this application:
   http://localhost/student_registration_client_server/

DEMONSTRATION
1. Open the registration page in the browser (client).
2. Enter a name, email and course, then click Register student.
3. The browser sends an HTTP POST request to server/submit.php.
4. The PHP server validates the information through StudentService.php.
5. StudentRepository.php sends a prepared SQL INSERT to MySQL.
6. A success message is returned to the browser.
7. Click "View registered students" to retrieve and display saved records.

LAYERED ARCHITECTURE
- Presentation layer: index.php, students.php and assets/style.css.
  Displays the user interface and collects input.
- Server/controller: server/submit.php.
  Receives the HTTP request and returns the response.
- Business logic layer: app/StudentService.php.
  Validates input and coordinates registration.
- Data access layer: data/StudentRepository.php and data/Database.php.
  Connects to MySQL and executes prepared SQL queries.
- Database layer: student_registration database and students table.
  Stores student records.

CLIENT-SERVER INTERACTION
Client (browser) -> HTTP POST -> PHP server -> business logic -> data access -> MySQL.
MySQL result -> PHP server -> HTTP redirect/response -> browser.

ASSESSMENT EVIDENCE
Capture screenshots of:
1. The registration form in the browser.
2. The successful registration message after submitting a student.
3. The registered students page showing the saved record.
4. The students table in phpMyAdmin.

LOCALHOST LINK
http://localhost/student_registration_client_server/

NOTE
The localhost link works on the computer running XAMPP. It is not a public internet link.
If your MySQL root account has a password, update data/Database.php.
