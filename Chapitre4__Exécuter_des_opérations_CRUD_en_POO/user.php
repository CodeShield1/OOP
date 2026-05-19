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
    return $stmt->execute([

        ":name" => $name,
        ":email" => $email,
        ":password" => $password

    ]);
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
        return $stmt->execute([

            ":id" => $id,
            ":name" => $name,
            ":email" => $email

        ]);
    }

    // DELETE
    public function deleteUser($id) {

        $sql = "DELETE FROM users
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([

            ":id" => $id

        ]);
   }
}