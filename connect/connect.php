<?php
    $host = "localhost";
    $user = "hoho";
    $pw = "dlwm5656!";
    $db = "hoho";

    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("utf-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>