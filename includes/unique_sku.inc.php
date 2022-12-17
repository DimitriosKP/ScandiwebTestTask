<?php

    require_once 'config.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $sku = $_POST["sku"];
        $sql = "SELECT `sku` from `product` WHERE `sku` = :sku";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':sku', $sku, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row == NULL) {
            echo "valid";
        } else {
            echo "invalid";
        }
    }