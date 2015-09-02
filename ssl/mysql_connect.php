<?php # Script 7.2 - mysql_connect.php

// This file contains the database access information.
// This files also establishes a connection to MySQL and selects
// the database.

// Set the database access information as constants. 
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '2go2mars');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'insurance_quotes');

// Make the connection.
$dbc = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQl: ' . mysql_error() );

// Select the database.
@mysql_select_db (DB_NAME) Or die ('Could not select the database: ' . mysql_error() );
?>
