#MVC System in PHP (PHP 8.4 + HTML5UP)

This project is a web application developed in pure PHP (version 8.4.0) using the MVC (Model-View-Controller) architecture pattern. The interface was built based on an HTML5UP template, ensuring a modern and responsive layout.

#Technologies Used
PHP 8.4.0
HTML5 / CSS3 / JavaScript
HTML5UP Template
MySQL
XAMPP (development environment)

#Prerequisites

Before running the project, you need to have the following installed:

PHP 8.4.0
XAMPP (or another local server)
Web browser
MySQL

#PHP 8.4.0 Installation

Windows (manual):
Access the official website:

https://www.php.net/downloads
Download PHP 8.4 Thread Safe (zip)

Extract to a folder, for example:

C:\php
Add to the system PATH:
Search for "Environment Variables"
Edit the Path

Add:

C:\php

Test in the terminal:

php -v

#XAMPP Installation

Download the XAMPP:

https://www.apachefriends.org/index.html
Install normally
Open the XAMPP Control Panel
Start:
Apache
MySQL

#Project Configuration

Clone or download this repository:

git clone https://github.com/your-username/your-project.git

Place the folder inside:

C:\xampp\htdocs\

Access in your browser:

http://localhost/your-project/public

#HTML5UP Template

The system layout was based on an HTML5UP template, adapted to work with PHP in the MVC pattern.

CSS and JS files are located in /public/assets. Views reuse components such as header, footer, and base layout.

#Features

Basic CRUD
Clear separation of layers (MVC)
Layout reuse
Scalable organization

#Security (basic)

Use of htmlspecialchars to prevent XSS
Data validation on the backend

#Future improvements
Authentication system
Route middleware
ORM or Query Builder
REST API
File upload

#Contribution

Feel free to contribute:

Fork the project
Create a branch
