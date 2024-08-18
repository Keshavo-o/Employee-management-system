# Employee Management System :
## Overview
The Employee Management System is a web-based application developed using PHP, HTML, CSS, and MySQL. This system is designed to manage employee information and leave requests, providing distinct functionalities for admins and employees to streamline operations.

## Features
### Admin Panel
#### Login:
Secure login for administrators.
#### Manage Employees:
Add new employees, edit existing employee profiles, and manage leave requests.
#### Dashboard:
View a summary of employee data and leave applications.
### Employee Panel
#### Login:
Secure login for employees.
#### Edit Profile: 
Update personal information.
#### Submit Leave Application:
Apply for leave within the allowed deadline.
General
## Responsive Design:
Fully responsive, ensuring compatibility with various devices and screen sizes.
## Database Integration:
Employee,complaints and leave data is managed using MySQL.
## Prerequisites:
PHP 7.0 or higher
MySQL 5.7 or higher
Apache or any other web server
Don't forget to mport the database:

### Importing Database
Create two differnet databases in MySQL as complaints and employee_management_system.
Import the provided SQL file (database.sql) into your MySQL database.
Configure the database connection:

Open the config.php file.
Update the database credentials (DB_HOST, DB_USER, DB_PASS, DB_NAME) to match your setup.
Start the server:

## Instructions
If using XAMPP or WAMP, move the project folder to the htdocs directory.
Start Apache and MySQL servers.
Access the system via http://localhost/employee-management-system in your web browser.
Usage
### Admin Login: 
Use the admin credentials to access the admin panel.
Username : Keshav 
password : Keshav@123
### Employee Login: 
Employees can use their credentials to log in and manage their profiles and leave applications.
## Important Information
Database Configuration: Ensure that the database credentials in config.php are correctly set before running the application.
Server Requirements: Make sure your server environment meets the prerequisites listed above.

## Screenshots
For screenshots and additional images of the site, you can check out the assets/images folder in the project directory.

## Future Enhancements
Adding attendance tracking.
Performance review management.
Adding search implementation.
Integration with JavaScript for enhanced user interaction.
Further more I can add.
## Contributing
If you'd like to contribute to this project, feel free to fork the repository and submit a pull request. For major changes, please open an issue to discuss what you would like to change.
