<!-- src/Models/User.php -->
<?php
// src/Models/User.php

class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($data) {
        $stmt = $this->pdo->prepare("INSERT INTO users (first_name, last_name, rank, file_number, sex, birth_date, birth_district, date_of_enlistment, trainings_done, current_unit, name, email, role, password) VALUES (:first_name, :last_name, :rank, :file_number, :sex, :birth_date, :birth_district, :date_of_enlistment, :trainings_done, :current_unit, :name, :email, :role, :password)");
        return $stmt->execute($data);
    }

    public function updateUser($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare("UPDATE users SET first_name = :first_name, last_name = :last_name, rank = :rank, file_number = :file_number, sex = :sex, birth_date = :birth_date, birth_district = :birth_district, date_of_enlistment = :date_of_enlistment, trainings_done = :trainings_done, current_unit = :current_unit, name = :name, email = :email, role = :role, password = :password WHERE id = :id");
        return $stmt->execute($data);
    }

    public function deleteUser($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    public function getPersonnelStats() {
        $stmt = $this->pdo->query("SELECT role, COUNT(*) as count FROM users GROUP BY role");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAdminByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND role = 'admin'");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
