<?php

    class Book extends Product {

        public function __construct($sku, $name, $price, $type, $weight) {
            parent::__construct($sku, $name, $price);
            $this->type = $type;
            $this->weight = $weight;
        }

        public function set() {
            $this->connect();
            $sql = "INSERT INTO `book` (`sku`, `name`, `price`, `type`, `weight`) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $this->sku, PDO::PARAM_STR);
            $stmt->bindValue(2, $this->name, PDO::PARAM_STR);
            $stmt->bindValue(3, $this->price, PDO::PARAM_INT);
            $stmt->bindValue(4, $this->type, PDO::PARAM_STR);
            $stmt->bindValue(5, $this->weight, PDO::PARAM_STR);
            $stmt->execute();
        }
}