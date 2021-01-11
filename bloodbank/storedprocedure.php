<?php
#fetch details
$connect = mysqli_connect("localhost", "root", "", "bloodbank");
    $id = 7;
    $query = "CALL getbloodrequest($id)";


    if($result = mysqli_query($connect, $query)){
        while($row = mysqli_fetch_row($result))
        {
            print_r($row[1]);
        }
    }