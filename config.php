<?php
ob_start();
define("DATABASE", "emp");
define("SERVER", "localhost");
define("USERNAME", "root");
define("TBL_PRE", "");
define("DB_PRE", "");
define("PASSWORD", "");
function DbConnection(){
$conn = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
return $conn;
}