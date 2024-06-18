# PHP Crash Course Repository

This repository contains the code and exercises from Brad Traversy's PHP Crash Course available on YouTube. The course covers a range of PHP basics and intermediate topics, providing a solid foundation for working with PHP.

## Table of Contents

- [PHP Crash Course Repository](#php-crash-course-repository)
  - [Table of Contents](#table-of-contents)
  - [Introduction](#introduction)
  - [Files and Directories](#files-and-directories)
  - [Pre-requisites](#pre-requisites)
  - [Getting Started](#getting-started)
  - [Course Overview](#course-overview)

## Introduction

This repository includes the following topics:

- Output & Comments
- Variables & Data Types
- Arrays
- Conditionals & Operators
- Loops & Iteration
- Functions
- Array Functions
- String Functions
- Superglobals
- $\_GET & $\_POST Superglobals
- Sanitizing Inputs
- Cookies
- Sessions
- File Handling
- File Upload
- Exceptions
- Object-Oriented Programming (OOP)

## Files and Directories

The main directory contains PHP scripts that demonstrate each topic. Here is a brief overview of the key files:

- `01_output.php`: Demonstrates output methods and comments in PHP.
- `02_variables.php`: Covers variables and data types.
- `03_arrays.php`: Discusses different types of arrays.
- `04_conditionals.php`: Explains conditionals and operators.
- `05_loops.php`: Illustrates different types of loops.
- `06_functions.php`: Introduces functions and their usage.
- `07_array_functions.php`: Shows functions for working with arrays.
- `08_string_functions.php`: Details functions for manipulating strings.
- `09_superglobals.php`: Explains superglobals in PHP.
- `10_get_post.php`: Demonstrates usage of $\_GET and $\_POST superglobals.
- `11_sanitizing_inputs.php`: Covers sanitizing inputs to prevent security issues.
- `12_cookies.php`: Introduces cookies and their management.
- `13_sessions.php`: Explains sessions for maintaining state across pages.
- `14_file_handling.php`: Demonstrates reading and writing files.
- `15_file_upload.php`: Covers file upload functionality.
- `16_exceptions.php`: Introduces exception handling.
- `17_oop.php`: Explains Object-Oriented Programming concepts.

The `feedback` directory contains a feedback form application that demonstrates the use of PHP with MySQL. The application contains:

- A home page (`index.php`) with a feedback form.
- An about page (`about.php`) with information about the application.
- A feedback page (`feedback.php`) that displays feedback submitted by users.
- The `config` directory with the database configuration and SQL file to set up the required tables.

## Pre-requisites

- PHP installed on your machine
- A web server like Apache or Nginx (or all-in-one tools like XAMPP or Laragon)
- A MySQL database (for the feedback form application)
- A code editor like Visual Studio Code or Sublime Text

## Getting Started

To run the scripts in this repository:

1. **Clone the Repository**

   ```
   git clone https://github.com/stekatag/php-crash-course.git
   cd php-crash-course
   ```

2. **Run a Local Server**
   Use a tool like XAMPP, Laragon, or PHP's built-in server to run the PHP scripts. For example, you can use PHP's built-in server by running the following command:

   ```
   php -S localhost:8000
   ```

3. **Access the Scripts**
   Open your browser and go to `http://localhost:8000` followed by the script name, e.g., `http://localhost:8000/01_output.php`.

4. **To run the feedback form application:**

   - Create a MySQL database and import the `feedback/config/php_dev.sql` file to set up the required tables.
   - Update the database configuration in `feedback/config/database.php` with your database credentials.
   - Access the feedback form by going to `http://localhost:8000/feedback/index.php`.

## Course Overview

This course provides practical examples and explanations for various PHP concepts. Each script is a standalone example, so you can run them independently to see the output and understand how each concept works.
