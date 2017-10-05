<?php
include('inc/session.php');
$page = 'Добавяне на меню';
$link = 'menu';
include('inc/top.php');
if(!isset($_GET['id']) || !empty($_GET['id'])) {
	header("Location: ./pages.php");
}
?>

<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- BEGIN SIDEBAR -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<?php include 'inc/left.php'; ?>
		<!-- END SIDEBAR -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE HEAD-->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Меню
						<small>Управление на Меню</small>
					</h1>
				</div>
				<!-- END PAGE TITLE -->

			</div>
			<!-- END PAGE HEAD-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="./">Начало</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<span class="active">Меню</span>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE BASE CONTENT -->
			<div class="row">
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-directions"></i><?php echo $page; ?> </div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
							<?php
								if(isset($_POST['submit'])) {
									if(empty($_POST['title_bg']) || empty($_POST['title_en']) || empty($_POST['title_de'])) {
										echo '<div class="note note-danger">
                                                    <p> Грешка: Моля, въведете заглавие на всички езици!</p>
                                                 </div>';
									} else {
										$get_id = $_GET['id'];
										$title_bg = $_POST['title_bg'];
										$title_en = $_POST['title_en'];
										$title_de = $_POST['title_de'];
										$link = $_POST['link'];
										$parent_id = $_POST['parent_id'];
										$order = $_POST['order'];
										$add = "INSERT INTO menu (`title_bg`, `title_en`, `title_de`, `link`, `parent_id`, `order`)
										VALUES ('".$title_bg."', '".$title_en."', '".$title_de."', '".$link."', '".$parent_id."', '".$order."')";
										if ($conn->query($add) === TRUE) {
											echo "<div class=\"note note-success\">
												<p>Линкът е добавен успешно. <a href=\"./menu.php\">Към списъка с линкове</a></p>
											 </div>";
										} else {
											echo "Error updating record: " . $conn->error;
										}
									}
								}
							?>
							<form action="" method="post">
							<div class="form-group">
								<label>Заглавие (BG)</label>
								<input type="text" name="title_bg" class="form-control input-medium" value="">
								<div class="input-icon right input-medium margin-top-10">
									<label>Заглавие (EN)</label>
									<input type="text" name="title_en" class="form-control" value=""> </div>
								<div class="input-icon right input-medium margin-top-10">
									<label>Заглавие (DE)</label>
									<input type="text" name="title_de" class="form-control" value=""> </div>
								<div class="input-icon right input-medium margin-top-10">
									<label>Линк</label>
									<input type="text" name="link" class="form-control" value=""> </div>
								<div class="input-icon right input-medium margin-top-10">
									<label>Родител</label>
									<select name="parent_id">
										<option value="0">Основен</option>
										<?php
											$sqll = "SELECT * FROM menu WHERE parent_id='0' ORDER BY `order` ASC";
											$resultt = $conn->query($sqll);

											if ($resultt->num_rows > 0) {
												// output data of each row
												while($roww = $resultt->fetch_assoc()) {
													echo "<option value='".$roww['id']."'>".$roww['title_bg']."</option>";
												}
											}
										?>
									</select>
								</div>
								<div class="input-icon right input-medium margin-top-10">
									<label>Позиция</label>
									<input type="number" value="1" name="order" min="1" />
								</div>
								<div class="input-group input-medium margin-top-10">
									<button type="submit" name="submit" class="btn blue">Запамети</button>
								</div>
								<hr> 
							</div>
							</form>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>

			<!-- END PAGE BASE CONTENT -->
		</div>
		<!-- END CONTENT BODY -->
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler">
		<i class="icon-login"></i>
	</a>
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner"> 2017 &copy; <a href="https://dlozev.eu" target="_blank">DLozev</a>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN QUICK NAV -->
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/table-bootstrap.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
	$(document).ready(function()
	{
		$('#clickmewow').click(function()
		{
			$('#radio1003').attr('checked', 'checked');
		});
	})
</script>
</body>

</html>