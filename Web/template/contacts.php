<?php include 'header.php'; ?>
    
	  <section id="page-title" class="page-title-classic">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/"><?php echo _HOME; ?></a> </li>
                        <li class="active"><?php echo _CONTACTS; ?></li>
                    </ul>
                </div>
                <div class="page-title">
                    <h1><?php echo _CONTACTS; ?></h1>
                </div>
            </div>
        </section>

        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-t-30">
                            <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="name"><?php echo _NAME; ?></label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email"><?php echo _EMAIL; ?></label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="subject"><?php echo _SUBJECT; ?></label>
                                        <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message"><?php echo _MESSAGE; ?></label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>

                                 <div class="form-group">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="6LdhOTMUAAAAAADEsRkg4iv5OQJ4ahoWoVyteZCQ"></div>
                                </div>
                                
                                
                                <button class="btn btn-default" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-uppercase"><?php echo _MAP; ?></h3>

                        <!-- Google map sensor -->
                         <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCRrEyIS5e1ehLa9mNfx8pVlQC3ARg8KMQ"></script>
                        <div class="map m-t-30" data-map-address="Bulgaria" data-map-zoom="10" data-map-icon="/template/images/markers/marker2.png" data-map-type="ROADMAP"></div>
                        <!-- Google map sensor -->

                    </div>
                </div>
            </div>
        </section>
        <!-- end: CONTENT -->
	<?php include 'footer.php'; ?>