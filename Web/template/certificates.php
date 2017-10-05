<?php include 'header.php'; ?>
    
    <section class="about-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            
            	<!--Content Column-->
            	<div class="content-column col-md-12 col-sm-12 col-xs-12">
                	<div class="icon-box"><span class="icon flaticon-helmet"></span></div>
                	<div class="inner-box">
                    	<?php
							$c_sql = "SELECT * FROM certificates";
							$c_result = $conn->query($c_sql);

							if ($c_result->num_rows > 0) {
								while($c_row = $c_result->fetch_assoc()) {
									echo "<div class='col-md-3'>
											<a href='/uploads/certificates/".$c_row['image']."' class='lightbox-image' title='".$c_row["title$db_lang"]."'>
												<img src='/uploads/certificates/".$c_row['image']."' alt='".$c_row["title$db_lang"]."' style='width: 100%;'>
											</a>
										</div>";									
								}
							} else {
								echo "0 results";
							}
						?>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
	<?php include 'footer.php'; ?>