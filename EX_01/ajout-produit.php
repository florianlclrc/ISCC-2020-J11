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
   
    $sql = "INSERT INTO produit(id,nom,description,prix,quantite)
        VALUES('8','T-shirt noir','T-shirt coton de couleur noire','15.50','10')";
    $sql=$pdo->prepare(sql);
    $sth->execute();
?>