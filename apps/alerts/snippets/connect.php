<?php
    try{
        $host = '127.0.0.1';
        $theDataBase   = 'kjc_website_alert';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$theDataBase;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $connector = new PDO($dsn, $user, $pass, $opt);
    }catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
