<!-- public/add_personnel.php -->
<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

include '../templates/header.php';
?>

<div class="add-personnel-container">
    <form class="add-personnel-form" action="process_add_personnel.php" method="POST">
        <h1>Add Personnel</h1>
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div>
            <label for="rank">Rank:</label>
            <input type="text" id="rank" name="rank" required>
        </div>
        <div>
            <label for="file_number">File Number:</label>
            <input type="text" id="file_number" name="file_number" required>
        </div>
        <div>
            <label for="sex">Sex:</label>
            <input type="text" id="sex" name="sex" required>
        </div>
        <div>
            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" required>
        </div>
        <div>
            <label for="birth_district">Birth District:</label>
            <input type="text" id="birth_district" name="birth_district" required>
        </div>
        <div>
            <label for="date_of_enlistment">Date of Enlistment:</label>
            <input type="date" id="date_of_enlistment" name="date_of_enlistment" required>
        </div>
        <div>
            <label for="trainings_done">Trainings Done:</label>
            <input type="text" id="trainings_done" name="trainings_done" required>
        </div>
        <div>
            <label for="current_unit">Current Unit:</label>
            <input type="text" id="current_unit" name="current_unit" required>
        </div>
        <div>
            <button type="submit">Add Personnel</button>
        </div>
    </form>
</div>

<?php include '../templates/footer.php'; ?>
