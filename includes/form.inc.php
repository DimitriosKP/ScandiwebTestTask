<?php

    require_once 'config.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
        $_POST = array_map('trim', $_POST);

        $sku = $_POST['sku'] ?? '';
        $name = $_POST['name'] ?? '';
        $price = $_POST['price'] ?? '';
        $type = $_POST['type'] ?? '';
        $size = $_POST['size'] ?? '';
        $height = $_POST['height'] ?? '';
        $width = $_POST['width'] ?? '';
        $length = $_POST['length'] ?? '';
        $weight = $_POST['weight'] ?? '';
        
        function setProduct(Product $product) {
            $product->set();
        }

        $chk_sku = new Check_sku($sku);
        setProduct($chk_sku);

        switch ($type) {
          case ('dvd'):
            $product = new Dvd($sku, $name, $price, $type, $size);
            break;
          case ('book'):
            $product = new Book($sku, $name, $price, $type, $weight);
            break;
          case ('furniture'):
            $product = new Furniture($sku, $name, $price, $type, $height, $width, $length);
            break;
        }

        setProduct($product);

        $_SESSION['success'] = true;
        header("Location: ../index.php");
    }