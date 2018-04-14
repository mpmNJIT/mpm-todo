<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=mpm54';
    $username = 'mpm54';
    $password = 'SbYrtd3sv';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>