<?php

include 'autoload.php';

$template = 'article';
$get_id = $_GET['id'];
$get_slug = $_GET['slug'];
$c_sql = "SELECT * FROM news WHERE id='$get_id' AND slug='$get_slug'";
$c_result = $conn->query($c_sql);

if ($c_result->num_rows > 0) {
	while($c_row = $c_result->fetch_assoc()) {
		 $values["title$db_lang"] .= $c_row["title$db_lang"];
	}
} else {
	 $values["title$db_lang"] = _NEWS;
}
include "./template/$template.php";


?>