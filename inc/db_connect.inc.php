<?php
// db_connect.inc.php
// This file creates a PDO connection to the MySQL database.
// It is included by other PHP files using require_once.

// TODO 1: Create variables for your database connection:
//   $host     = 'localhost'
//   $user     = 'root'
//   $password = ''          (XAMPP default has no password)
//   $dbname   = 'ctec'
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ctec';

// TODO 2: Build the DSN (Data Source Name) string:
//   $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname
// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// TODO 3: Create a new PDO instance:
//   $db = new PDO($dsn, $user, $password)
// Create a PDO Instance
$db = new PDO($dsn, $user, $password);

// TODO 4: Set the default fetch mode to return objects:
//   $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ)
// Set PDO default data type to be returned
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
