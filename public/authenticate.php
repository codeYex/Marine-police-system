<!-- public/authenticate.php -->
<?php
session_start();
require_once '../config/database.php';
require_once '../src/Models/User.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = new User($pdo);
$admin = $user->getAdminByEmail($email);

if ($admin && password_verify($password, $admin['password'])) {
    $_SESSION['admin_id'] = $admin['id'];
    header('Location: admin_dashboard.php');
} else {
    header('Location: login.php?error=invalid_credentials');
}
exit();
?>
