<?php

$servername = "localhost";
$username = "user_m294";
$password = "sadfweadf";
$database = "project_m294";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("<div>Connection failed: " . mysqli_connect_error() . "</div><script>history.back()</script>");
}
//echo "Connected successfully";

/*
 * Deplay
 * create database project_m294;
 * use project_m294;
 * create table Tnotes(
 * noteID int auto_increment primary key,
 * noteTitle varchar(50),
 * noteText text,
 * noteTodo text,
 * notedate timestamp not null
 * );
 * create user user_m294 identified by 'sadfweadf';
 * grant select, update, delete, insert on project_m294.* to user_m294;
 */
