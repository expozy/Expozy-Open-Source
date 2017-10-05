<?php
include('inc/session.php');
$page = 'Администратори';
$link = 'admins';
include('inc/top.php');
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
					<h1>Администратори
						<small>Управление на администратори</small>
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
					<span class="active">Администратори</span>
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
								<i class="fa fa-users"></i><?php echo $page; ?> 
							</div>
							<div class="actions">
                                <a href="add_admin.php" class="btn btn-circle btn-info">
                                    <i class="fa fa-plus"></i>
                                    <span class="hidden-xs"> Добави администратор </span>
                                </a>
                            </div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<?php
									if(isset($_GET['del'])) {
										$get_del = $_GET['del'];
										$del_admin = "DELETE FROM admins WHERE id='$get_del'";

										if ($conn->query($del_admin) === TRUE) {
											echo "<div class=\"note note-success\">
                                                    <p>Администраторът е изтрит успешно.</p>
                                                 </div>";
										} else {
											echo "Error deleting record: " . $conn->error;
										}
									}
								?>
								<table class="table table-striped table-bordered table-hover table-checkable" id="datatable_products">
									<thead>
									<tr role="row" class="heading">
										<th width="1%"> # </th>
										<th width="10%"> Е-Мейл</th>
										<th width="8%"> Действия </th>
									</tr>
									</thead>
									<tbody>
									<?php
										$sql = "SELECT * FROM admins";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {
												echo "<tr>
										<td>".$row['id']."</td>
										<td>".$row['mail']."</td>
										<td><div class=\"btn-group btn-group-xs btn-group-solid\"><button type=\"button\" class=\"btn green\" onclick=\"javascript:location.href='edit_admin.php?id=".$row['id']."'\">Редактиране</button>
										 <button type=\"button\" class=\"btn red\" onclick=\"javascript:location.href='admins.php?del=".$row['id']."'\">Изтриване</button></div></td>
									</tr>";
											}
										} else {
											echo "Няма намерени администратори.";
										}
									?>
									</tbody>
								</table>

							</div>
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