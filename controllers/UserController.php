<?php

class UserController {

        // private property for the instance of UserModel
    private $userModel;

        // Constructor for initializing UserModel
    public function __construct() {
                // Instantiate the UserModel and assign it to the UserModel property

        $this->userModel = new UserModel();
    }

        // Method for displaying users

    public function index() {
        $users = $this->userModel->getAllUsers();
                // Include the view file to display the list of users
        include 'views/users_list.php';  // Update to display user list
    }
}
?>
