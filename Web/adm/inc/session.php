<?php
session_start();
include("./../autoload.php");


$user_check = $_SESSION['login_admin'];

$ses_sql = mysqli_query($mysqli_conn,"SELECT id, mail, level FROM admins where mail = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['mail'];
$user_level = $row['level'];
$login_id = $row['id'];

if(!isset($_SESSION['login_admin'])){
	header("location:login.php");
}
?>