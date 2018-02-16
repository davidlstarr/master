<?php
$page_id = "about-page";
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


    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360">
        <!-- Slide 2 -->
        <div class="slide background-overlay-dark kenburns" style="background-image:url('_img/IMG_0943.JPG);">
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <!-- Captions -->
                    <span class="strong">Safety Matters to Us</span>
                    <h1>safety and compliance</h1>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->

    </div>
    <!--end: Inspiro Slider -->

    <section>
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="heading heading text-left" style="padding-bottom: 40px">
                            <h2 style="font-size: 28px; margin: 0; padding: 0">OUR SAFETY CERTIFICATIONS & RATINGS </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="0">
                            <a href="https://www.isnetworld.com/"><h4>ISNet  (“A” rating)</h4></a>
                            <p>The International Suppliers Network is a system which logs and tracks vendors. <a href="_pdf/Isnet_PICS_certification.pdf" style="text-decoration: underline">Click here</a> to check out our rating information </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="200">
                            <a href="https://www.avetta.com/"><h4>Avetta (formerly PICS)</h4></a>
                            <p>Avetta connects the world's leading organizations with qualified suppliers, contractors and vendors.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="400">
                            <h4>EMR (Emergency Modification Rating) is .48.</h4>
                            <p>Experience Modification Rate (EMR) is a number used by insurance companies to gauge both past cost of injuries and future chances of risk. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="600">
                            <h4>OSHA 10 Certified</h4>
                            <p>Certification in the recognition, avoidance, abatement and prevention of safety and health hazards in workplaces.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="800">
                            <h4>HAZWOPER Certified</h4>
                            <p>Hazardous Waste Operations and Emergency Response Standard Certification.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="1000">
                            <h4>OSHA required Powered Industrial Truck/Vehicle Powered Platforms</h4>
                            <p class="invisible">Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="1000">
                            <h4>In the Process of getting ISO 14001 - Estimated time of completion is August 2018</h4>
                           <!-- <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>-->
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="1000">
                        <h4>All Trucks built according to OSHA Standards</h4>
                        <!--<p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>-->
                    </div>
                </div>
                </div>
        </div>
    </section>

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
