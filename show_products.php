<?php

    require_once 'includes/config.inc.php';

    use get\Dvd as ShowDvds;
    use get\Book as ShowBooks;
    use get\Furniture as ShowFurnitures;
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        //create an array `dvds` with all DVDs
        $dvd = new ShowDvds();
        $sql_dvd = $dvd->get();
        $row_dvd = $pdo->prepare($sql_dvd); //return "SELECT * FROM `dvd`";
        $row_dvd->execute();
        $dvds = $row_dvd->fetchAll(); 
        
        //create an array `books` with all Books
        $book = new ShowBooks();
        $sql_book = $book->get();
        $row_book = $pdo->prepare($sql_book); //return "SELECT * FROM `book`";
        $row_book->execute();
        $books = $row_book->fetchAll(); 

        //create an array `furns` with all Furnitures
        $furniture = new ShowFurnitures();
        $sql_furniture = $furniture->get();
        $row_furn = $pdo->prepare($sql_furniture); //return "SELECT * FROM `furniture`";
        $row_furn->execute();
        $furns = $row_furn->fetchAll(); 

        $total = array_merge($dvds, $books, $furns);

        usort($total, function($a, $b) {
            return $a['id'] <=> $b['id'];
        } );

        echo json_encode($total);
        
        //$json = json_encode($total, JSON_PRETTY_PRINT);
        //echo "<pre>$json</pre>";

    }