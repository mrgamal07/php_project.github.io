# PHP Project

A simple PHP project demonstrating core functionalities, including a form connected to a database.

## Technologies Used
- PHP
- MySQL
- HTML
- CSS

## Installation
1. Clone the repository:
   ```bash
   git https://github.com/mrgamal07/php_project.github.io.git
   ```
2. Navigate to the project directory:
   ```bash
   cd php-project
   ```
3. Import the SQL file into your database:
   ```bash
   mysql -u your-username -p your-database < database.sql
   ```
4. Configure the database connection in `config.php`:
   ```php
   $conn = new mysqli('localhost', 'your-username', 'your-password', 'your-database');
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ```
5. Start the PHP built-in server:
   ```bash
   php -S localhost:8000
   ```

## Usage
1. Open your browser and go to `http://localhost:8000` to view the project.
2. Fill out the form and submit to store data in the database.

## License
This project is licensed under the MIT License.
