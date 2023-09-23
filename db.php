<?php

$connection = mysqli_connect("127.0.0.1", "root", "", "hotel");

// Check connection
if ($connection === false) {
    die("ERROR: Connection failed. " . mysqli_connect_error());
}

//echo "Connected successfully";