<?php

require 'database.php';

$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_method'] === 'delete';

if ($isDeleteRequest) {
    $id = $_POST['id'];

    // 1. create sql
    $sql = 'DELETE FROM posts WHERE id = :id';

    // 2. create statement with prepare
    $stmt = $pdo->prepare($sql);

    // 3. create params
    $params = ['id' => $id];

    // 4. Execute
    $stmt->execute($params);

    header('Location: index.php');

    exit();
}
