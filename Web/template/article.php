<?php include 'header.php'; ?>
    
<section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-md-12">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                    	<?php
							$get_id = $_GET['id'];
							$get_slug = $_GET['slug'];
							$c_sql = "SELECT * FROM news WHERE id='$get_id' AND slug='$get_slug'";
							$c_result = $conn->query($c_sql);

							if ($c_result->num_rows > 0) {
								while($c_row = $c_result->fetch_assoc()) {
									$body = htmlspecialchars_decode($c_row["body$db_lang"]);
									echo '<div class="post-item-description">
									<h2>'.$c_row["title$db_lang"].'</h2>
									<div class="post-meta">

										<span class="post-meta-date"><i class="fa fa-calendar-o"></i>'.$c_row["date"].'</span>
										<div class="post-meta-share">
											<a class="btn btn-xs btn-slide btn-facebook" href="#">
												<i class="fa fa-facebook"></i>
												<span>Facebook</span>
											</a>
											<a class="btn btn-xs btn-slide btn-twitter" href="#" data-width="100" style="width: 28px;">
												<i class="fa fa-twitter"></i>
												<span>Twitter</span>
											</a>
											<a class="btn btn-xs btn-slide btn-instagram" href="#" data-width="118">
												<i class="fa fa-instagram"></i>
												<span>Instagram</span>
											</a>
											<a class="btn btn-xs btn-slide btn-googleplus" href="mailto:#" data-width="80">
												<i class="fa fa-envelope"></i>
												<span>Mail</span>
											</a>
										</div>
									</div>
									'.$body.'
								</div>';
								}
							} else {
								header('Location: /');
							}
						?>
        
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
	<?php include 'footer.php'; ?>