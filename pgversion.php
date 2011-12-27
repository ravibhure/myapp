<?php
// @Ravi.Bhure@symphonysv.com
include('config/db.php');
 // attempt a connection
$dbh = pg_connect("host=$hostname_DB dbname=postgres user=$username_DB password=$password_DB");
 if (!$dbh) {
     die("Error in connection: " . pg_last_error());
 }

 // get value of 'server_version' variable
 echo "Server version: " . pg_parameter_status($dbh, 'server_version');
 ?>
