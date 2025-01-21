<!-- templates/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marine Police System</title>
    <!-- Link to an external CSS file for styling -->
    <link rel="stylesheet" href="../public/styles.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <h1>Marine Police System</h1>
        <nav class="navbar">
            <ul class="nav-list">
                <li class="nav-item"><a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a href="admin_dashboard.php" class="nav-link"><i class="fas fa-cogs"></i> Settings</a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link"><i class="fas fa-user"></i> Profile</a></li>
                <?php if (isset($_SESSION['admin_id'])): ?>
                    <li class="nav-item login-link"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                <?php else: ?>
                    <li class="nav-item login-link"><a href="login.php" class="nav-link"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
