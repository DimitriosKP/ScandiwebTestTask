<?php

    namespace get;

    class Book extends ShowProduct {

        public function get() {
          return "SELECT * FROM `book`";
        }
}