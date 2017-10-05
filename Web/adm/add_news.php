<?php
include('inc/session.php');
$page = 'Добавяне на статия';
$link = 'news';
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
					<h1>Новини
						<small>Управление на новини</small>
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
					<span class="active">Новини</span>
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
								<i class="fa fa-newspaper-o"></i><?php echo $page; ?> </div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
							<?php
								if(isset($_POST['submit'])) {
									$title_bg = $_POST['title_bg'];
									$title_en = $_POST['title_en'];
									$title_de = $_POST['title_de'];
									$body_bg = htmlspecialchars($_POST['body_bg']);
									$body_en = htmlspecialchars($_POST['body_en']);
									$body_de = htmlspecialchars($_POST['body_de']);
									$textcyr = $title_bg;
									$cyr = ['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',

										'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',

										'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',

										'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'];

									$lat = [

										'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',

										'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',

										'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',

										'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'

									];
									$textcyr = str_replace($cyr, $lat, $textcyr);
									$textlat = str_replace($lat, $cyr, $textlat);
									$slug = strtolower(trim(preg_replace('/[^a-zA-Z0-9]+/', '-', $textcyr), '-'));
									$sql = "INSERT INTO news (title_bg, body_bg, title_en, body_en, title_de, body_de, slug)
									VALUES ('".$title_bg."', '".$body_bg."', '".$title_en."', '".$body_en."', '".$title_de."', '".$body_de."', '".$slug."')";

									if ($conn->query($sql) === TRUE) {
										echo "<div class=\"note note-success\">
                                                    <p>Статията е добавена успешно. <a href=\"./news.php\">Към списъка със статии</a></p>
                                                 </div>";
									} else {
										echo "Error updating record: " . $conn->error;
									}
								}
							?>
							<div class="tabbable-custom ">
								<form action="" method="post">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_5_1" data-toggle="tab"> Български </a>
                                            </li>
                                            <li>
                                                <a href="#tab_5_2" data-toggle="tab"> Английски </a>
                                            </li>
                                            <li>
                                                <a href="#tab_5_3" data-toggle="tab"> Немски </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_5_1">
												<input class="form-control spinner col-md-6" type="text" name="title_bg" value="" placeholder="Заглавие" style="max-width: 400px;" /><br /><br />
                                               <textarea class="ckeditor" id="short" name="body_bg"></textarea>
                                            </div>
                                            <div class="tab-pane" id="tab_5_2">
												<input class="form-control spinner col-md-6" type="text" name="title_en" value="" placeholder="Заглавие" style="max-width: 400px;" /><br /><br />
                                                <textarea class="ckeditor" id="short" name="body_en"></textarea>
                                            </div>
                                            <div class="tab-pane" id="tab_5_3">
												<input class="form-control spinner col-md-6" type="text" name="title_de" value="" placeholder="Заглавие" style="max-width: 400px;" /><br /><br />
                                               <textarea class="ckeditor" id="short" name="body_de"></textarea>
                                            </div>
                                        </div>
                                    </div>
									<br />
									<button type="submit" name="submit" class="btn blue">Добави статията</button>
								</form>
								<script>
									CKEDITOR.replace( 'ckeditor' );
								</script>
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