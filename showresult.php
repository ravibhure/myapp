<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
 <html>
   <head></head>
   <body>

<?php
 include('config/db.php');
 // attempt a connection
$dbh = pg_connect("host=$hostname_DB dbname=$database_DB user=$username_DB password=$password_DB");

 if (!$dbh) {
     die("Error in connection: " . pg_last_error());
 }

 // execute query
 $sql = "SELECT * FROM contact";
 $result = pg_query($dbh, $sql);
 if (!$result) {
     die("Error in SQL query: " . pg_last_error());
 }

 // iterate over result set
 // print each row
 while ($row = pg_fetch_array($result)) {
     echo "firstname: " . $row[0] . "<br />";
     echo "surname: " . $row[1] . "<p />";
     echo "emailaddress: " . $row[2] . "<p />";
 }

 // free memory
 pg_free_result($result);

 // close connection
 pg_close($dbh);
 ?>

  </body>
 </html>
