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
    <section id="page-title" data-parallax-image="_img/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>Gallery 4 Columns</h1>
                <span>Description</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Pages</a>
                    </li>
                    <li class="active"><a href="#">Gallery 4 Columns</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <!-- Content -->
    <section id="page-content">
        <div class="container">


            <!-- Gallery -->
            <div class="grid-layout grid-4-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/1.jpg" data-lightbox="gallery-item"><img src="_img/gallery/1.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/2.jpg" data-lightbox="gallery-item"><img src="_img/gallery/2.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/3.jpg" data-lightbox="gallery-item"><img src="_img/gallery/3.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/4.jpg" data-lightbox="gallery-item"><img src="_img/gallery/4.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/5.jpg" data-lightbox="gallery-item"><img src="_img/gallery/5.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/6.jpg" data-lightbox="gallery-item"><img src="_img/gallery/6.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/7.jpg" data-lightbox="gallery-item"><img src="_img/gallery/7.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/8.jpg" data-lightbox="gallery-item"><img src="_img/gallery/8.jpg"></a>
                </div>
                <div class="grid-item">
                    <a class="image-hover-zoom" href="_img/gallery/9.jpg" data-lightbox="gallery-item"><img src="_img/gallery/9.jpg"></a>
                </div>
            </div>
            <!-- end: Gallery -->



        </div>
    </section>
    <!-- end: Content -->

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
