<!DOCTYPE html>
<html lang="en">
<?php
$page_id = 'home-page';
?>
<head>
    <?php include(__DIR__ . '/head.php'); ?>
</head>

<body id="<?php echo $page_id;?>">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <?php include(__DIR__ . '/header.php'); ?>
        <!-- end: Header -->

        <!-- Inspiro Slider -->
        <?php include(__DIR__ . '/slider.php'); ?>
        <!--end: Inspiro Slider -->


        <?php include(__DIR__ . '/welcome.php'); ?>

        <!-- PORTFOLIO -->
        <?php /*include(__DIR__ . '/portfolio.php'); */?>
        <!-- end: PORTFOLIO -->


        <!-- CALL TO ACTION -->
        <?php include(__DIR__ . '/maintenance_call_to_action.php'); ?>
        <!-- end: CALL TO ACTION -->

        <!-- SERVICES -->
        <?php include(__DIR__ . '/services.php'); ?>
        <!-- end: SERVICES -->

        <!-- TESTIMONIALS -->
        <?php include(__DIR__ . '/testimonials.php'); ?>
        <!-- end: TESTIMONIALS -->

        <!-- CLIENTS -->
        <?php //include(__DIR__ . '/clients.php'); ?>
        <!-- end: CLIENTS -->

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
