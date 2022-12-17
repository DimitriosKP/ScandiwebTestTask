<?php

    require_once 'includes/config.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $dvd = new get\Dvd();
        $sql_dvd = $dvd->get();
        $row_dvd = $pdo->query($sql_dvd); //return "SELECT * FROM `dvd`";
        $dvds = $row_dvd->fetchAll();

        $book = new get\Book();
        $sql_book = $book->get();
        $row_book = $pdo->query($sql_book); //return "SELECT * FROM `book`";
        $books = $row_book->fetchAll();
        
        $furniture = new get\Furniture();
        $sql_furniture = $furniture->get();
        $row_furn = $pdo->query($sql_furniture); //return "SELECT * FROM `furniture`";
        $furns = $row_furn->fetchAll();

        $total = array_merge($dvds, $books, $furns);

        usort($total, function($a, $b) {
            return $a['id'] <=> $b['id'];
        } );

        echo json_encode($total);
        
        //$json = json_encode($total, JSON_PRETTY_PRINT);
        //echo "<pre>$json</pre>";

    }