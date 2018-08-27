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
    <section class="no-padding" data-height-lg="500" data-height-xs="200" data-height-sm="300" style="height: 459px">
        <!-- Google map sensor -->
        <iframe style="border: 0;" onClick="style.pointerEvents='none'" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.0920500066145!2d-84.09673399999997!3d40.73799999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883eedf7456c721d%3A0x2d204c09f9cdaf1d!2s615+E+Elm+St%2C+Lima%2C+OH+45804!5e0!3m2!1sen!2sus!4v1434402431461" width="100%" height="500" frameborder="0"></iframe>
    </section>
    <!-- end: Page title -->

    <!-- CONTENT -->
    <!-- BEGIN CONTACT US SECTION -->
    <section id="contact-us" class="section section-bgtype-image">
        <div class="section-inner">
            <!--<div class="bg-overlay"></div>-->
            <div class="container section-content">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <div class="section-title">
                            <h3 class="main-title">Contact Us</h3>
                        </div>
                        <!-- /.section-title -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <a data-fancybox-type="iframe" id="formResult" class="form-respond text-center" href="javascript:void(0);"></a>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <form action="" method="post" name="contact-us-form" id="contact-us-form" class="element-line validate contact-us-form" role="form">
                        <input type="hidden" name="guid" value="" />
                        <div class="col-md-5 col-md-offset-1">
                            <div class="form-group">
                                <label for="FirstName">First Name*</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="FirstName" id="FirstName" class="form-control required" placeholder="Enter First Name">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <div class="form-group">
                                <label for="LastName">Last Name*</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="LastName" id="LastName" class="form-control required" placeholder="Enter Last Name">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <?php
                            if ($_GET['ad'] == "prociso") {
                                echo "<div style='display: none' class=\"form-group form-group-bottom\">
                                <div class=\"input-group input-group-lg\">
                                    <input type=\"hidden\" name=\"user\" id=\"user\" class=\"form-control required\" readonly=\"readonly\" value=\"Prociso\">
                                </div>
                                <!-- /.input-group -->
                            </div>";
                            }
                            ?>

                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="Address" id="Address" size="XX" class="form-control address" placeholder="Enter Address">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <label for="City">City</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="City" id="City" size="XX" class="form-control address" placeholder="Enter City">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="Province">State</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="Province" id="Province" size="XX" maxlength="3" class="form-control address" placeholder="Enter State">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="PostalCode">Zip</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="PostalCode" id="PostalCode" size="XX" maxlength="XX" class="form-control address" placeholder="Enter Zip">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <!--  <div class="form-group">
                                  <label for="email">Country</label>
                                  <div class="input-group input-group-lg">
                                      <input type="text" name="Country" id="Country" class="form-control address" placeholder="Enter Country">
                                  </div>-->
                            <!-- /.input-group -->
                            <!--</div>-->
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-5">
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="Email">Email*</label>
                                <div class="input-group input-group-lg">
                                    <input type="email" name="Email" id="Email" class="form-control required email" placeholder="Enter Email">
                                </div>
                                <!-- /.input-group -->
                            </div>

                            <div class="form-group">
                                <label for="Phone">Phone*</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="Phone" id="Phone" size="XX" class="form-control required phone" placeholder="Enter Phone Number">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group form-group-bottom">
                                <label for="subject">Subject*</label>
                                <div class="input-group input-group-lg">
                                    <input type="text" name="subject" id="subject" class="form-control required" placeholder="Enter subject">
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="message">Message*</label>
                                <div class="input-group input-group-lg">
                                    <textarea name="message" id="message" class="form-control required" placeholder="Enter Message"></textarea>
                                </div>
                                <!-- /.input-group -->
                            </div>
                            <!--<div class="form-group">
                                <div class="g-recaptcha required" data-sitekey="<?php /*echo $siteKey;*/?>" style="clear:both;"></div>
                            </div>-->
                            <!-- /.form-group -->
                            <div class="form-group form-group-bottom">
                                <button id="submit" type="submit" class="btn btn-lg btn-custom">
                                    Send Message
                                </button>
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.section-content -->
        </div>
        <!-- /.section-inner -->
    </section>
    <!-- //END CONTACT US SECTION -->
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
