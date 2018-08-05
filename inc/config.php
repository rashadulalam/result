<?php

/**
 * @package name result-press
 * @author Rashadul Alam
 **/

// database properties
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "result_press";

// database connection

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );

// check the connnection
if ( $conn->connect_errno ) {
	die( "Database connect fiald: ". $conn->connect_error);
}