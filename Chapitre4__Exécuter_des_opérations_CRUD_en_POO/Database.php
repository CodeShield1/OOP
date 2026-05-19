<?php
    class  Database{
        private $host  ="localhost";
        private $dbname = "blogdb";
        private $username ="root";
        private $password = "";

        private $conn;

        public function __construct() {
            try{
                // DSN
               $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";

               // Create PDO connection
               $this->conn = new PDO($dsn, $this->username, $this->password);

                // Error mode
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            }catch(PDOException $e){
                echo "Connection failed : " . $e->getMessage();
            }

        }

        // Method to return connection
        public function connect() {

            return $this->conn;
        }
    }


  