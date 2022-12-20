<?php

    class Delete {
        
        protected $pdo;
        
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function delete() {
            $params = func_get_args();
            foreach ($params as $sql) {
                $this->pdo->query($sql);
            }
        }
}