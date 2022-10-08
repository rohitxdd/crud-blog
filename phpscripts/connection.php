<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = crudblog";
   $credentials = "user = postgres password=Rohit@";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   }
?>