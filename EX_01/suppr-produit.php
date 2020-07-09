<?php
    function connect_to_database(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "basetest01";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    $pdo = connect_to_database();
   
    $req = $dbco->prepare("DELETE FROM produit WHERE id = :8");
    $req->execute();