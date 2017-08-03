<?php
    $dsn = 'mysql:host=localhost;dbname=my_pc_shop';
    $username = 'root';
    $password = 'crazkyle91';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>