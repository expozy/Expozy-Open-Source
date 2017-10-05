<?php
   include('inc/session.php');
   $page = 'Начало';
   $link = 'home';
   include('inc/top.php');
?>
<div class="page-container">
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
			<?php include 'inc/left.php'; ?>
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
           
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
					<?php if($user_level != '2' && $user_level != '3'){ ?>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="./pages.php">
                                <div class="visual">
                                    <i class="fa fa-file-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">Страници</span>
                                    </div>
                                    <div class="desc"> Управление на страници </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="./menu.php">
                                <div class="visual">
                                    <i class="icon-directions"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup">Меню</span>
                                    </div>
                                    <div class="desc">Управление на менюто</div>
                                </div>
                            </a>
                        </div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="admins.php">
                                <div class="visual">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup">Администратори</span></div>
                                    <div class="desc"> Управление на администраторите</div>
                                </div>
                            </a>
                        </div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 dark" href="news.php">
                                <div class="visual">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup">Новини</span></div>
                                    <div class="desc"> Управление на новините</div>
                                </div>
                            </a>
                        </div>
                    </div>
	<?php } ?>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->
        </div>
	
        <!-- END CONTAINER -->
		<?php include 'inc/bottom.php'; ?>