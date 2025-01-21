<!-- public/index.php -->
<?php
session_start();
include '../templates/header.php';
?>

<!-- <nav class="navbar">
    <ul class="nav-list">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item login-link"><a href="login.php" class="nav-link">Admin Login</a></li>
    </ul>
</nav> -->

<div class="card-container">
    <div class="card">
        <img src="https://www.independent.co.ug/wp-content/uploads/2016/06/SFC-command-1.jpg" alt="Image 1">
        <div class="card-content">
            <h2>Card 1</h2>
            <p>Description for card 1.</p>
        </div>
    </div>
    <div class="card">
        <img src="https://www.independent.co.ug/wp-content/uploads/2016/06/SFC-command-1.jpg" alt="Image 2">
        <div class="card-content">
            <h2>Card 2</h2>
            <p>Description for card 2.</p>
        </div>
    </div>
    <div class="card">
        <img src="https://www.independent.co.ug/wp-content/uploads/2016/06/SFC-command-1.jpg" alt="Image 3">
        <div class="card-content">
            <h2>Card 3</h2>
            <p>Description for card 3.</p>
        </div>
    </div>
    <div class="card">
        <img src="https://i0.wp.com/www.thekampalareport.com/wp-content/uploads/2024/12/netpicture-sfc.jpg?fit=1000%2C689&ssl=1" alt="Image 4">
        <div class="card-content">
            <h2>Card 4</h2>
            <p>Description for card 4.</p>
        </div>
    </div>
    <div class="card">
        <img src="https://i0.wp.com/www.thekampalareport.com/wp-content/uploads/2024/12/netpicture-sfc.jpg?fit=1000%2C689&ssl=1" alt="Image 5">
        <div class="card-content">
            <h2>Card 5</h2>
            <p>Description for card 5.</p>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>
