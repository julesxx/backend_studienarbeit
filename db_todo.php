<?php
include 'db.php';
$user_id=1;
$myArray = array();
if ($result = $db->query("SELECT * FROM content WHERE user_id=$user_id")) {

    $tempArray = array();
    while($row = $result->fetch_object()) {
        $tempArray = $row;

        array_push($myArray, $tempArray);
    }
    $myArray=json_encode($myArray);
}

echo $myArray;


include 'db_close.php';