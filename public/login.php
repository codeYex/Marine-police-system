<!-- public/login.php -->
<?php include '../templates/header_login.php'; ?>

<div class="login-container">
    <form class="login-form" action="authenticate.php" method="POST">
        <h1>Login</h1>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <div>
            <a href="index.php" class="back-home-button">Back Home</a>
        </div>
    </form>
</div>

<?php include '../templates/footer.php'; ?>
