<?php

    namespace get;

    class Furniture extends ShowProduct {

        public function get() {
            return "SELECT * FROM `furniture`";
        }
}