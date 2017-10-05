<?php include 'header.php'; ?>
<section id="page-title" class="page-title-classic">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/"><?php echo _HOME; ?></a> </li>
                        <li class="active"><?php echo _NEWS; ?></li>
                    </ul>
                </div>
                <div class="page-title">
                    <h1><?php echo _NEWS; ?></h1>
                </div>
            </div>
        </section>
    
	<section id="page-content">
            <div class="container">
                <!-- Blog -->
                <div id="blog" class="grid-layout post-1-columns m-b-30" data-item="post-item">

					<?php
						$c_sql = "SELECT * FROM news";
						$c_result = $conn->query($c_sql);

						if ($c_result->num_rows > 0) {
							while($c_row = $c_result->fetch_assoc()) {
								$short_body = htmlspecialchars_decode($c_row["body$db_lang"]);
								$short_body = strip_tags($short_body);
								if(strlen($short_body) > 347) {
									$short_body = mb_substr($short_body,0,347, "utf-8")."...";
								}

								echo '<div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                            <div class="post-item-description"> 
							<span class="post-meta-date"><i class="fa fa-calendar-o"></i>'.$c_row['date'].'</span> 
                                <h2><a href="/news/'.$c_row['id'].'-'.$c_row["slug"].'.html">'.$c_row["title$db_lang"].'</a></h2>
                                <p>'.$short_body.'</p>
                                <a href="/news/'.$c_row['id'].'-'.$c_row["slug"].'.html" class="item-link">'._READ_MORE.' <i class="fa fa-arrow-right"></i></a> </div>
                        </div>
                    </div>';
							}
						} else {
							echo "0 results";
						}
					?>

                </div>
                <!-- end: Blog -->

            </div>

        </section>
	<?php include 'footer.php'; ?>