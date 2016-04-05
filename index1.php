<?php

    define('MINCHARS', 8);
    echo MINCHARS;

// set a database connection
   $dbname = "zfdemo";
   $username = "root";
   $password = "root";
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.$dbname . ';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e) {
        die($e->getMessage());
    }

// run a query
    $sql = "SELECT * FROM `movies` LIMIT 0, 3";
    try {
        $result = $conn->query($sql);
    }
    catch (Excaption $e) {
        die($e->getMessage());
    }
// display post titles
    if($result->rowCount()){
        foreach ($result as $post) {
            echo '<h2>' . $post['title'] . '</h2>';
        }
    }


// OOP style
/*
    $post = new PostModel();
    $posts = $post->fetchAll();
    foreach ($posts as $post) {
        echo '<h1>' . $post->title . '</h1>';
    }
*/

?>