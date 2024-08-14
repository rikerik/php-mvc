<?php

// Include the UserDAO class to interact with the database
require_once 'dao/UserDAO.php';

class UserModel {
        // Private property to hold the UserDAO instance
        private $userDAO;

            // Constructor method to initialize the UserDAO instance
    public function __construct() {
                //db connection parameters

        $dsn = 'mysql:host=localhost;dbname=mvc_app';
        $username = 'root';
        $password = '';

        try {
                        //Create a new Pdo instance to connect to the db
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

             // Instantiate the DAO with the PDO connection
            // Because of this the UserModel will be able to use UserDAO for db operations
            $this->userDAO = new UserDAO($pdo);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    // Fetch all users through the DAO
    public function getAllUsers() {
        return $this->userDAO->fetchAllUsers();
    }

}
?>
