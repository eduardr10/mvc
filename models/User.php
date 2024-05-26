<?php

require_once 'config/database.php';

class User {

  // Constructor - Injected with PDO object
  public function __construct(private PDO $pdo) {
  }

  // Function to get all users
  public function getAll() {
    // Prepare a SQL statement to select all users from the "user" table
    $stmt = $this->pdo->prepare('SELECT * FROM users');
    // Execute the prepared statement
    $stmt->execute();

    // Fetch all results as associative arrays
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Function to get a user by ID
  public function getById($id) {
    // Prepare a SQL statement to select a user by ID
    $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');

    // Bind the parameter ":id" to the provided ID value
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);  // PDO::PARAM_INT for integer value

    // Execute the prepared statement with bound parameter
    $stmt->execute();

    // Fetch the first result as an object
    return $stmt->fetchObject();
  }

  // Function to create a new user
  public function create($name, $email, $age) {
    // Prepare a SQL statement to insert a new user
    $stmt = $this->pdo->prepare('INSERT INTO users (name, email, age) VALUES (:name, :email, :age)');

    // Bind parameters to the corresponding values
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);  // PDO::PARAM_STR for string value
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);

    // Execute the prepared statement with bound parameters
    return $stmt->execute();  // Returns true/false for successful execution
  }

  // Function to update a user
  public function update($id, $name, $email, $age) {
    // Prepare a SQL statement to update a user
    $stmt = $this->pdo->prepare('UPDATE users SET name = :name, email = :email, age = :age WHERE id = :id');

    // Bind parameters to the corresponding values
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':age', $age, PDO::PARAM_INT);

    // Execute the prepared statement with bound parameters
    return $stmt->execute();  // Returns true/false for successful execution
  }

  // Function to delete a user by ID
  public function delete($id) {
    // Prepare a SQL statement to delete a user by ID
    $stmt = $this->pdo->prepare('DELETE FROM users WHERE id = :id');

    // Bind the parameter ":id" to the provided ID value
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the prepared statement with bound parameter
    return $stmt->execute();  // Returns true/false for successful execution
  }
}
