<?php

class AdController {
    // private property for the instance of AdModel
    private $adModel;

    // Constructor for initializing AdModel
    public function __construct() {
        // Instantiate the AdModel and assign it to the adModel property
        $this->adModel = new AdModel();
    }

    // Method for displaying ads
    public function index() {
        // Retrieve ads
        $ads = $this->adModel->getAllAds();
        
        // Include the view file to display the list of ads
        include 'views/ad_list.php';  
    }
}
?>
