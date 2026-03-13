# 🎓 Student Management System

A Student Management System is a web-based application developed using PHP and MySQL that helps manage student records efficiently. This project allows administrators to add, view, edit, and delete student information through an easy-to-use dashboard.

The system demonstrates CRUD operations, database connectivity, and basic web application functionality.

--------------------------------------------------

## 🚀 Features

- Admin Login System
- Logout System
- Dashboard Module
- Add Student Module
- View Students Module
- Edit Student Module
- Delete Student Module
- Config Module (Database Connection)

--------------------------------------------------

## 🧩 Modules

### 1. Login Module
Allows the admin to securely access the system using a username and password stored in the database.

### 2. Logout Module
Allows the admin to securely log out of the system and destroy the session.

### 3. Dashboard Module
Provides a main control panel where the admin can manage student records.

### 4. Add Student Module
Allows the admin to add new student details into the database.

### 5. View Students Module
Displays the list of all students available in the database.

### 6. Edit Student Module
Allows the admin to update existing student information.

### 7. Delete Student Module
Allows the admin to remove student records from the database.

### 8. Config Module
Handles the database connection between the application and MySQL.

--------------------------------------------------

## 🗄️ Database

The project uses a MySQL database with two main tables.

### Admin Table
Stores administrator login credentials.

Fields:
- id
- username
- password

### Students Table
Stores student information.

Fields:
- id
- Student Name
- Father Name
- Address
- Email
- Category
- Enrollment
- Action (Edit | Delete)

--------------------------------------------------

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript

--------------------------------------------------

## 📂 Project Structure

student-management-system

config.php

login.php  
logout.php  
dashboard.php  

add_student.php  
view_students.php  
edit_student.php  
delete_student.php  

database/
admin.sql
student.sql

--------------------------------------------------

## ⚙️ Installation Guide

1. Download or clone this repository.

2. Move the project folder to the XAMPP htdocs directory.

3. Start Apache and MySQL in XAMPP.

4. Open phpMyAdmin and create a new database.

5. Import the SQL file from the database folder.

6. Update the database connection inside config.php if required.

7. Run the project in the browser using:

http://localhost/student-management-system

--------------------------------------------------

## 📌 Purpose of the Project

This project is developed for learning purposes. It helps beginners understand PHP backend development, MySQL database integration, CRUD operations, and authentication systems.

--------------------------------------------------

## 👨‍💻 Author

Sujeet Vishwakarma

--------------------------------------------------

⭐ If you like this project, give it a star on GitHub.
