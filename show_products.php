<?php

    require_once 'includes/config.inc.php';

    use get\Dvd as DVD_show;
    use get\Book as BOOK_show;
    use get\Furniture as FURNITURE_show;
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $dvd = new DVD_show();
        $sql_dvd = $dvd->get();
        $row_dvd = $pdo->query($sql_dvd); //return "SELECT * FROM `dvd`";
        $dvds = $row_dvd->fetchAll(); //array `dvds` with all DVDs

        $book = new BOOK_show();
        $sql_book = $book->get();
        $row_book = $pdo->query($sql_book); //return "SELECT * FROM `book`";
        $books = $row_book->fetchAll(); //array `books` with all Books
        
        $furniture = new FURNITURE_show();
        $sql_furniture = $furniture->get();
        $row_furn = $pdo->query($sql_furniture); //return "SELECT * FROM `furniture`";
        $furns = $row_furn->fetchAll(); //array `furns` with all Furnitures

        $total = array_merge($dvds, $books, $furns);

        usort($total, function($a, $b) {
            return $a['id'] <=> $b['id'];
        } );

        echo json_encode($total);
        
        //$json = json_encode($total, JSON_PRETTY_PRINT);
        //echo "<pre>$json</pre>";

    }