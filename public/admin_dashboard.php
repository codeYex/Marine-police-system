<!-- public/admin_dashboard.php -->
<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

include '../templates/header.php';
require_once '../config/database.php';
require_once '../src/Controllers/UserController.php';

$controller = new UserController($pdo);
$personnelStats = $controller->getPersonnelStats();
$roles = [];
$counts = [];

foreach ($personnelStats as $stat) {
    $roles[] = $stat['role'];
    $counts[] = $stat['count'];
}
?>

<div class="admin-dashboard-container">
    <aside class="sidebar">
        <h4>Admin Dashboard</h4>
        <ul>
            <li><a href="admin_dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="add_personnel.php"><i class="fas fa-user-plus"></i> Add Personnel</a></li>
            <li><a href="view_personnel.php"><i class="fas fa-users"></i> View Personnel</a></li>
            <li><a href="view_personnel.php"><i class="fas fa-users"></i> Notifications</a></li>
            <li><a href="view_personnel.php"><i class="fas fa-users"></i> Regional transfers</a></li>
            <li><a href="view_personnel.php"><i class="fas fa-users"></i> Inbox</a></li>

            <li><a href="settings.php"><i class="fas fa-cogs"></i> Settings</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <h4>Welcome, AIP KOMAKECH</h4>
        <!-- <a href="add_personnel.php" class="button">Add Personnel</a> -->

        <!-- Include Chart.js library -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Canvas element for the chart -->
        <canvas id="personnelChart" width="400" height="200"></canvas>

        <!-- Chart.js script to render the chart -->
        <script>
            var ctx = document.getElementById('personnelChart').getContext('2d');
            var personnelChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($roles); ?>,
                    datasets: [{
                        label: 'Number of Personnel',
                        data: <?php echo json_encode($counts); ?>,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </main>
</div>

<?php include '../templates/footer.php'; ?>
