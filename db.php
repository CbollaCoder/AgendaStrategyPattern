<?php

//To catch variable sessions
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'agendadb'
);

/* if(isset($conn)){
    echo "DB is connected!";
} */

?>