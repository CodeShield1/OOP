<?php

require_once "Database.php";

class User {

    private $conn;

    public function __construct() {

        $database = new Database();

        $this->conn = $database->connect();
    }

    // CREATE
    public function createUser($name, $email, $password) {

        $sql = "INSERT INTO users (name, email, password)
                VALUES (:name, :email, :password)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        return $stmt->execute();
    }

    // READ
    public function getUsers() {

        $sql = "SELECT * FROM users";
        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function updateUser($id, $name, $email) {

        $sql = "UPDATE users
                SET name = :name,
                    email = :email
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);

        return $stmt->execute();
    }

    // DELETE
    public function deleteUser($id) {

        $sql = "DELETE FROM users
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }
}