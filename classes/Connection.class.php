<?php

    class Connection {
        
        protected $pdo;
        
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function connect() {
            $params = func_get_args();
            foreach ($params as $sql) {
                $this->pdo->query($sql);
            }
        }
}