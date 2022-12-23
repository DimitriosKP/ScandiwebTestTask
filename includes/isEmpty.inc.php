<?php

    require_once 'config.inc.php';

    $sql = "SELECT `sku` from `product`";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row == NULL) {
        echo "valid";
    } else {
        echo "invalid";
    }
