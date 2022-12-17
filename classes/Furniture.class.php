<?php

    class Furniture extends Product {

        public function __construct($sku, $name, $price, $type, $height, $width, $length) {
            parent::__construct($sku, $name, $price);
            $this->type = $type;
            $this->height = $height;
            $this->width = $width;
            $this->length = $length;
        }

        public function set() {
            $this->connect();
            $sql = "INSERT INTO `furniture` (`sku`, `name`, `price`, `type`, `height`, `width`, `length`)
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $this->sku, PDO::PARAM_STR);
            $stmt->bindValue(2, $this->name, PDO::PARAM_STR);
            $stmt->bindValue(3, $this->price, PDO::PARAM_INT);
            $stmt->bindValue(4, $this->type, PDO::PARAM_STR);
            $stmt->bindValue(5, $this->height, PDO::PARAM_INT);
            $stmt->bindValue(6, $this->width, PDO::PARAM_INT);
            $stmt->bindValue(7, $this->length, PDO::PARAM_INT);
            $stmt->execute();
        }
}