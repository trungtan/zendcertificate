<?php

try {
    $dsn = 'mysql:host=localhost; dbname=mydrupal';
    $dbh = new PDO($dsn, 'root', 'root');

    $sql = "SELECT * FROM actions";

    $results = $dbh->query($sql);
    $results->setFetchMode(PDO::FETCH_OBJ);

    //var_dump($results);exit;
    echo "waiting to know does \$result stored all data...";
    sleep(10);

    foreach( $results as $row){
        var_dump($row);
        echo "<br/><br/>";
    }
} catch (PDOException $e){
    echo 'Failed: ' . $e->getMessage();
}
