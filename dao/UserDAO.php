<?php

class UserDAO {
    // Private property to hold the PDO instance
    private $pdo;

    // Constructor method to initialize PDO instance
    public function __construct(PDO $pdo) {
        // Assign the PDO instance to the private property
        $this->pdo = $pdo;
    }

    // Fetch all users
    public function fetchAllUsers() {
        // Prepare and execute the query to get all users
        // It will retrieve all data from the users table
        $stmt = $this->pdo->query('SELECT id, name FROM users');
        
        // PDO::FETCH_ASSOC ensures that results are returned as an associative array where column names are the keys
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return the array of users
        return $users;
    }
}
?>
