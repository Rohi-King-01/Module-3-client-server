# Student Registration System

### Client-Server Application – Module 3

## About the Project

This is a simple student registration system built using PHP, HTML, CSS and MySQL in a XAMPP environment.

The application allows users to enter student details (name, email and course). The information is sent to the PHP server, processed and stored in a MySQL database.

The main aim of this project is to demonstrate how a client and server communicate in a web application.

## Technologies Used

- HTML and CSS – User interface and styling.
- PHP – Server-side processing.
- MySQL – Storing student information.
- XAMPP – Local server environment.

## System Architecture

The application uses a layered architecture:

1. **Presentation Layer:** Displays the registration form.
2. **Controller Layer:** Receives requests from the browser.
3. **Business Logic Layer:** Validates and processes information.
4. **Data Access Layer:** Connects PHP to MySQL.
5. **Database Layer:** Stores student records.

## How It Works

1. The user opens the registration page.
2. Enters student details and submits the form.
3. PHP receives and validates the information.
4. The server sends the information to MySQL.
5. MySQL saves the student record.
6. A success message is displayed to the user.

## Running the Project

1. Install and open XAMPP.
2. Start Apache and MySQL.
3. Place the project folder inside `C:\xampp\htdocs\`.
4. Import `database.sql` using phpMyAdmin.
5. Open the browser and visit:

   `http://localhost/student_registration_client_server/`

## Screenshots

Add screenshots showing:

- Student registration form.
- Successful registration message.
- Registered students.
- MySQL database records.

## Project Links

**GitHub Repository:**  
https://github.com/Rohi-King-01/Module-3-client-server

**Localhost:**  
http://localhost/student_registration_client_server/

*Note: The localhost link works on the computer running XAMPP.*

## Conclusion

This project helped me understand how a client communicates with a server, how PHP processes requests, and how MySQL stores information. It also gave me practical experience working with layered architecture.

**Author:** Rohi-King-01
