<?php

// Include the AdDAO class to interact with the database
require_once 'dao/AdDAO.php';

class AdModel {
        // Private property to hold the AdDAO instance
    private $adDAO;
    // Constructor method to initialize the AdDAO instance
    public function __construct() {
        //db connection parameters
        $dsn = 'mysql:host=localhost;dbname=mvc_app';
        $username = 'root';
        $password = '';

        try {
            //Create a new Pdo instance to connect to the db
            $pdo = new PDO($dsn, $username, $password);
            //Set the pdo to throw exceptions on errors
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Instantiate the DAO with the PDO connection
            // Because of this the AdModel will be able to use AdDAO for db operations
            $this->adDAO = new AdDAO($pdo);
        } catch (PDOException $e) {
            //Handle error
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    // Fetch all advertisements through the DAO
    public function getAllAds() {
                // This method returns the result of the DAO's fetchAllAds method
        return $this->adDAO->fetchAllAds();
    }
}
?>
