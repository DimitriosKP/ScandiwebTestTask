<?php

    require_once 'config.inc.php';

    function test($item) {
        return 'test-'.$item;
    }

    if (isset($_POST['product_delete_btn'])) {
        
        $sku = $_POST['prods_delete'] ?? false;
        if ($sku !== false) {
                        
            foreach ($sku as $val) { 
                $sql_prod = "DELETE FROM `product` WHERE sku = '".$val."'";
                $sql_dvd = "DELETE FROM `dvd` WHERE sku = '".$val."'";
                $sql_book = "DELETE FROM `book` WHERE sku = '".$val."'";
                $sql_furn = "DELETE FROM `furniture` WHERE sku = '".$val."'";

                $conn = new Delete($pdo);
                $conn->connect($sql_prod, $sql_dvd, $sql_book, $sql_furn);
            }
        }

        $_SESSION['success'] = true;
        header('Location: /ScandiwebTestTask/index.php');
        die();
}