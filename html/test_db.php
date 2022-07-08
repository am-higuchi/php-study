<?php 
    try {
        $dsn = 'mysql:host=mysql;dbname=phpstudy;';
        $db = new PDO($dsn, 'phpstudy', 'phpstudy');

        $sql = 'SELECT version();';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
