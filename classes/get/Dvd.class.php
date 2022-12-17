<?php

    namespace get;

    class Dvd extends ShowProduct {

        public function get() {
          return "SELECT * FROM `dvd`";
        }

}