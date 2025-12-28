# Budgy V3.0

Budgy V3.0 is a PHP-based personal finance application designed to help users manage their budget by tracking incomes and expenses. It acts as a "Smart Wallet," allowing for the categorization and monitoring of financial transactions.

## Features

- **Income Management**:
  - Add new income sources.
  - View, update, and delete existing income records.
- **Expense Management**:
  - Add new expenses with categories.
  - View, update, and delete expense records.
- **Data Persistence**: Uses a MySQL database to store user financial data securely.
- **Object-Oriented Design**: Built using PHP classes for modularity.

## Project Structure

- **`classes/`**: Contains core logic.
  - `Income.php`: Handles CRUD operations for incomes.
  - `Expence.php`: Handles CRUD operations for expenses.
  - `Database.php`: Manages the database connection.
- **`incomes/`**: Scripts for processing income actions (add, modify, delete, show).
- **`expences/`**: Scripts for processing expense actions (add, modify, delete, show).
- **`config.php`**: Defines base paths and URLs.
- **`db_connect.php`**: Instantiates the database connection.

## Installation & Setup

1. **Prerequisites**:
   - PHP installed on your local server (e.g., XAMPP, WAMP).
   - MySQL Database.

2. **Database Configuration**:
   - Create a database named `smart_wallet`.
   - Create the required tables (`incomes` and `expences`) with columns corresponding to the code (e.g., `UserID`, `montant`, `description`, `date_`, `category`).

3. **Connection Settings**:
   - Check `db_connect.php` to ensure credentials match your environment:
     ```php
     $db = new DataBase("localhost", "smart_wallet", "root", "");
     ```

4. **Running the App**:
   - Place the project folder in your server's root directory (e.g., `htdocs`).
   - Ensure `BASE_URL` in `config.php` matches your local server address (default is `http://localhost:3000/`).
   - Access the application via your browser.

## Technologies Used
- PHP
- MySQL