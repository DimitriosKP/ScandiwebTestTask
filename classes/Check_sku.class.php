<?php 

    class Check_sku extends Product {

        public function __construct($sku) {
            $this->sku = $sku;
        }

        public function set() {
            $this->connect();
            $sql = "INSERT INTO `product` (`sku`) VALUES (?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $this->sku, PDO::PARAM_STR);
            $stmt->execute([(string)$this->sku]);
        }
    }