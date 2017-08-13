<?php
include 'db.php';

$myArray = array();
if ($result = $db->query("SELECT * FROM user")) {

    $tempArray = array();
    while($row = $result->fetch_object()) {
        $tempArray = $row;

        array_push($myArray, $tempArray);
    }
    $myArray=json_encode($myArray);
}

echo $myArray;


include 'db_close.php';