<?php
if(isset($_GET['title']))
    $title = $_GET['title'];
if(isset($_GET['desc']))
    $desc = $_GET['desc'];
if(isset($_GET['todo']))
    $todo = $_GET['todo'];

require './sql_connection.php';

$sql = "INSERT INTO Tnotes (noteTitle, noteText, noteTodo)VALUES ('$title', '$desc', '$todo')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}