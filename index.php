<?php

try {
    $mysqli = new mysqli('localhost', 'root', 'root', 'mydrupal');
    $sql = "SELECT * FROM actions";

    if(!$mysqli->real_query($sql)){         //Send query to db engine here
        echo 'Error in query: ' . $mysqli->error;
        exit;
    }

    if($result = $mysqli->store_result()){
        while($row = $result->fetch_assoc()){
            var_dump($row);
            echo '<br/><br/>';
        }
        $result->close();
    }

//    $result = $mysqli->query($sql);         //Send query to db engine here
//    while($row = $result->fetch_assoc()){
//        var_dump($row);
//        echo '<br/><br/>';
//    }


} catch (PDOException $e){
    echo 'Failed: ' . $e->getMessage();
}
