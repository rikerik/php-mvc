<?php

class AdDAO {
        // private property to hold the pdo instance
    private $pdo;

        // Constructor method to initialize pdo instance
    public function __construct(PDO $pdo) {
                // Assign the pdo instance to the private property
        $this->pdo = $pdo;
    }

    // Fetch all advertisements
    public function fetchAllAds() {
        //Prepare and execute the query to get all ads
        //it will retrieve all data from advertisements table
        $stmt = $this->pdo->query('SELECT id, userid, title FROM advertisements');
        // PDO::FETCH_ASSOC ensures that results are returned as an associative array where column names are the keys
        $ads = $stmt->fetchAll(PDO::FETCH_ASSOC);


        //return the array of ads
        return $ads;
    }

}
?>
