<?php

    abstract class Product {

        protected $pdo;
        protected $type;
        protected $id;
        protected $sku;
        protected $name;
        protected $price;
        protected $size;
        protected $height;
        protected $width;
        protected $length;

        // connect to the database
        public function connect() {
            $dsn = 'mysql:name=' . DB_HOST . ';dbname=' . DB_NAME;
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $this->pdo;
        }

        // create the object
        public function __construct($sku, $name, $price) {
            $this->sku = $sku;
            $this->name = $name;
            $this->price = $price;
        }

        public abstract function set();
}