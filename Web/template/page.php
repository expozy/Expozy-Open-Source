 <?php include 'header.php'; ?>
 <!-- Page title -->
        <section id="page-title" class="page-title-classic">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/"><?php echo _HOME; ?></a> </li>
                        <li class="active"><?php echo $values["title$db_lang"]; ?></li>
                    </ul>
                </div>
                <div class="page-title">
                    <h1><?php echo $values["title$db_lang"]; ?></h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <div class="grid-system-demo-live">
                    <div class="row">
						<div class="col-md-12">
							<?php echo htmlspecialchars_decode($values["body$db_lang"]).$values['not_found']; ?>
						</div>
					</div>
                </div>
            </div>
        </section>
        <!-- end: Content -->
		
<?php include 'footer.php'; ?>