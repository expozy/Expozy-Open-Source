<?php

session_start();

$servername = "localhost";
$username = "DB USER";
$password = "DB PASS";
$dbname = "DB NAME";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_set_charset($conn,"utf8");

if(isset($_GET['lang'])) {
	$_SESSION['lang'] = $_GET['lang'];
}

if(!isset($_SESSION['lang'])) {
	$lang = "bg";
	$db_lang = "_bg";
} else {
	$lang = $_SESSION['lang'];
}

if (file_exists("lib/lang/".$lang.".php")) {
	include("lib/lang/".$lang.".php");
	$db_lang = "_".$lang;
} else {
	include("lib/lang/bg.php");
}

include 'lib/inc/menu.php';

?>
