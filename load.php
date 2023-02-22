<?php

require './sql_connection.php';

$sql = "SELECT noteTitle as Titel, noteText as Beschreibung, noteTodo as ToDo, DATE_FORMAT(noteDate, '%d.%m.%Y %H:%i:%s') as Datum FROM Tnotes";
$result = mysqli_query($conn, $sql);

$emparray = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
}
