<!-- public/admin_dashboard.php -->
<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

include '../templates/header.php';
?>

<h1>Admin Dashboard</h1>
<p>Welcome, Admin!</p>

<?php include '../templates/footer.php'; ?>
