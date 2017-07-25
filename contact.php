<?php
$page_id = "contact-page";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(__DIR__ . '/head.php'); ?>
</head>

<body id="<?php echo $page_id?>">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <?php include(__DIR__ . '/header.php'); ?>
    <!-- end: Header -->

    <!-- Page title -->
    <section class="no-padding background-overlay-dark" data-height-lg="500" data-height-xs="200" data-height-sm="300" style="height: 459px">
        <!-- Google map sensor -->
        <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <div  data-height-lg="200" class="map" data-map-address="301 West Elm St. Lima, Ohio" data-map-zoom="14" data-map-icon="_img/markers/marker1.png" data-map-type="ROADMAP"></div>
    </section>
    <!-- end: Page title -->

    <!-- CONTENT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-uppercase">Get In Touch</h3>
                    <p>f you would like more information on our services, please fill out the
                        following form and we will call you promptly. When you have entered all the
                        information, click on the Submit button at the bottom of the form.</p>

                    <div class="row m-t-40">
                        <div class="col-md-6">
                            <address>
                                301 West Elm St.<br>
                                Lima, Ohio 45801<br>
                                <abbr title="Phone">P:</abbr> (419) 229-3192, (800) 686-3192
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                            </div>
                        </div>                                <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                        </div>

                        <div class="form-group">
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                            <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                        </div>
                        <button class="btn btn-default" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- end: CONTENT -->

    <!-- Footer -->
    <?php include(__DIR__ . '/footer.php'); ?>
    <!-- end: Footer -->

</div>
<!-- end: Wrapper -->

<!-- Go to top button -->
<a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
<?php include(__DIR__ . '/bottom_scripts.php'); ?>
</body>

</html>
