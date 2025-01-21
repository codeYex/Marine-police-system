<!-- public/process_add_personnel.php -->
<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit();
}

require_once '../config/database.php';
require_once '../src/Models/User.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$rank = $_POST['rank'];
$file_number = $_POST['file_number'];
$sex = $_POST['sex'];
$birth_date = $_POST['birth_date'];
$birth_district = $_POST['birth_district'];
$date_of_enlistment = $_POST['date_of_enlistment'];
$trainings_done = $_POST['trainings_done'];
$current_unit = $_POST['current_unit'];

$user = new User($pdo);
$user->addUser([
    'first_name' => $first_name,
    'last_name' => $last_name,
    'rank' => $rank,
    'file_number' => $file_number,
    'sex' => $sex,
    'birth_date' => $birth_date,
    'birth_district' => $birth_district,
    'date_of_enlistment' => $date_of_enlistment,
    'trainings_done' => $trainings_done,
    'current_unit' => $current_unit,
    'name' => "$first_name $last_name",
    'email' => '',  // Placeholder, can be removed if email is not required.
    'role' => 'personnel',
    'password' => ''  // Placeholder, can be removed if password is not required.
]);

header('Location: admin_dashboard.php');
exit();
?>
