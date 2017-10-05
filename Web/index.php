<?php

include 'autoload.php';

if(!isset($_GET['id']) || !isset($_GET['slug'])) {
	$page = '1';
	$slug = 'nachalo';
} else {
	$page = $_GET['id'];
	$slug = $_GET['slug'];
}

$sql = "SELECT * FROM pages WHERE id='$page' AND slug='$slug'";
$result = $conn->query($sql);
if($result) {
	$values = $result->fetch_assoc();
	$values['not_found'] = NULL;
} else {
	$values['not_found'] = _PAGE_NOT_FOUND;
}
if($page == '1') {
	$template = "index";
} else {
	$template = "page";
}
include "./template/$template.php";


?>