<!-- src/Controllers/UserController.php -->
<?php
require_once __DIR__ . '/../Models/User.php'; // Correct path to the User model

class UserController {
    private $user;

    public function __construct($pdo) {
        $this->user = new User($pdo);
    }

    public function index() {
        $users = $this->user->getAllUsers();
        $personnelStats = $this->user->getPersonnelStats();
        include __DIR__ . '/../../templates/user_list.php';
    }

    // Other methods...

    public function getPersonnelStats() {
        return $this->user->getPersonnelStats();
    }

    public function getAdminByEmail($email) {
        return $this->user->getAdminByEmail($email);
    }
}
?>
