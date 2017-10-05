<div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->
	<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
		<li class="nav-item start<?php if($link == 'home') {echo " active";}?>">
			<a href="./" class="nav-link nav-toggle">
				<i class="icon-home"></i>
				<span class="title">Начало</span>
			</a>
		</li>
		<li class="nav-item start<?php if($link == 'pages') {echo " active";}?>">
			<a href="./pages.php" class="nav-link nav-toggle">
				<i class="fa fa-file-o"></i>
				<span class="title">Страници</span>
			</a>
		</li>
		<li class="nav-item start<?php if($link == 'menu') {echo " active";}?>">
			<a href="./menu.php" class="nav-link nav-toggle">
				<i class="icon-directions"></i>
				<span class="title">Меню</span>
			</a>
		</li>
		<li class="nav-item start<?php if($link == 'news') {echo " active";}?>">
			<a href="./news.php" class="nav-link nav-toggle">
				<i class="fa fa-newspaper-o"></i>
				<span class="title">Новини</span>
			</a>
		</li>
		<li class="nav-item start<?php if($link == 'admins') {echo " active";}?>">
			<a href="./admins.php" class="nav-link nav-toggle">
				<i class="fa fa-users"></i>
				<span class="title">Администратори</span>
			</a>
		</li>
		<li class="nav-item start ">
			<a href="./logout.php" class="nav-link nav-toggle">
				<i class="fa fa-sign-out"></i>
				<span class="title">Изход</span>
			</a>
		</li>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>