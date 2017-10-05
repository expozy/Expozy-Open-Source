<?php

$menu_sql = "SELECT * FROM menu WHERE parent_id='0'";
$menu_result = $conn->query($menu_sql);
if($menu_result) {
	$menu = '<ul class="navigation clearfix">';
	while($link = $menu_result->fetch_assoc()) {
		$sub_sql = "SELECT * FROM menu WHERE parent_id='".$link['id']."'";
		$sub_result = $conn->query($sub_sql);
		if($sub_result->num_rows > 0) {
			$no_sub = "";
			$drop = " class='dropdown'";
		}else {
			$no_sub = "</li>";
			$drop = "";
		}
		$menu .= "<li$drop><a href='$link[link]'>".$link["title$db_lang"]."</a>$no_sub";
		if($sub_result->num_rows > 0) {
			$menu .= "<ul class='dropdown-menu'>";
			while($linkk = $sub_result->fetch_assoc()) {
				$menu .= "<li><a href='$linkk[link]'>".$linkk["title$db_lang"]."</a></li>";
			}
			$menu .= "</ul></li>";
		}
	}
	$menu .= "</ul>";
}

?>