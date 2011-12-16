<?php
// @Ravi.Bhure@symphonysv.com
include('config/db.php');
// attempt a connection
$db = pg_connect("host=$hostname_DB dbname=postgres user=$username_DB password=$password_DB");
 if (!$db) {
     die("Error in connection: " . pg_last_error());
 }
$query = "CREATE DATABASE $database_DB";

$result = pg_query($db, $query);
if (!$result) {
    $errormessage = pg_last_error();
    echo "Error with query: " . $errormessage;
    exit();
}
printf ("Created database $database_DB.");
$query =  "CREATE TABLE contact ( firstname VARCHAR(255), surname VARCHAR(255), emailaddress VARCHAR(255) )";
$result = pg_query($db, $query);
if (!$result) {
    $errormessage = pg_last_error();
    echo "Error with query: " . $errormessage;
    exit();
}
printf ("Created table contact in $database_DB.");
pg_close();
?>