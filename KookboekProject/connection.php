<?php
    $server = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "login";

    try
    {
        $conn = new PDO("mysql:host=$server;dbname=$dbname;", $username, $password);
    }
    catch(PDOException $e)
    {
        die("Connectie verbroken: " . $e -> getMessage());
    }
?>